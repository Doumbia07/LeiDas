<?php

namespace App\Http\Controllers;

use App\Models\Testimonial; // Importer le modèle
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Afficher les témoignages
    public function index()
    {
        // Récupérer les témoignages depuis la base de données
        $testimonials = Testimonial::all();

        // Passer les témoignages à la vue
        return view('testimonials', compact('testimonials'));
    }
}
