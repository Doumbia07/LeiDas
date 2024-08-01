<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function index()
    {
        $artisans = Artisan::all();
        return view('artisans.index', compact('artisans'));
    }

    public function search(Request $request)
{
    $query = $request->input('query');
    $artisans = Artisan::where('Nom', 'LIKE', "%{$query}%")
        ->orWhere('Ville', 'LIKE', "%{$query}%")
        ->orWhere('Competences', 'LIKE', "%{$query}%")
        ->get();

    return view('search_results', compact('artisans'));
}

}
