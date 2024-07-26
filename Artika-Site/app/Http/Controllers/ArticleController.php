<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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
        if($request->hasFile('images')){
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $article->images()->create(['path' => $imagePath]);
            }
        }

        return redirect()->route('home');
    }

    // Afficher un article
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }
}

