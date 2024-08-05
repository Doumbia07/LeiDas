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
        $keywords = explode(' ', $query);

        $artisans = Artisan::query();

        foreach ($keywords as $keyword) {
            $soundex = soundex($keyword);
            $keywordWithWildcards = '%' . $keyword . '%';

            $artisans->where(function($q) use ($keywordWithWildcards, $soundex) {
                $q->where('Competences', 'LIKE', $keywordWithWildcards)
                  ->orWhere('Ville', 'LIKE', $keywordWithWildcards)
                  ->orWhereRaw("SOUNDEX(Competences) = ?", [$soundex])
                  ->orWhereRaw("SOUNDEX(Ville) = ?", [$soundex]);
            });
        }

        $artisans = $artisans->get();

        return view('search_results', compact('artisans'));
    }

}
