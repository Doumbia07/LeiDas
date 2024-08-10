<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insère des témoignages dans la table 'testimonials'
        DB::table('testimonials')->insert([
            [
                'author' => 'Koffi Matial', // Nom de l'auteur du témoignage
                'content' => 'Excellent service, très satisfait !', // Contenu du témoignage
                'created_at' => now(), // Date et heure de création du témoignage
                'updated_at' => now(), // Date et heure de la dernière mise à jour du témoignage
            ],
            [
                'author' => 'Traoré Mariam', // Nom de l'auteur du témoignage
                'content' => 'Un artisan très professionnel et efficace.', // Contenu du témoignage
                'created_at' => now(), // Date et heure de création du témoignage
                'updated_at' => now(), // Date et heure de la dernière mise à jour du témoignage
            ],
            [
                'author' => 'Trabi Lou', // Nom de l'auteur du témoignage
                'content' => 'Les résultats sont au-delà de mes attentes.', // Contenu du témoignage
                'created_at' => now(), // Date et heure de création du témoignage
                'updated_at' => now(), // Date et heure de la dernière mise à jour du témoignage
            ],
        ]);
    }
}
