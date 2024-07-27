<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    // Afficher le formulaire de création d'un article
    public function create()
    {
        return view('articles.create');
    }

    // Enregistrer un nouvel article
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Créer un nouvel article
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = auth()->id();
        $article->save();

        // Sauvegarder les images si présentes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $article->images()->create(['path' => $imagePath]);
            }
        }

        return redirect()->route('articles.index');
    }

    // Afficher tous les articles
    public function index(Request $request)
    {
        $search = $request->input('search');

        $articles = Article::with('images')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                             ->orWhere('description', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('articles.index', compact('articles'));
    }

    // Afficher un article spécifique
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article->load('images'); // Charger les images associées
        return view('articles.show', compact('article'));
    }

    // Supprimer un article
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        // Supprimer les images associées
        foreach ($article->images as $image) {
            // Supprimer le fichier image du stockage
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $article->delete();
        return redirect()->route('articles.index');
    }
}
