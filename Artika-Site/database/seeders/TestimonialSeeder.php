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
        DB::table('testimonials')->insert([
            [
                'author' => 'Jean Dupont',
                'content' => 'Excellent service, très satisfait !',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author' => 'Marie Curie',
                'content' => 'Un artisan très professionnel et efficace.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author' => 'Paul Martin',
                'content' => 'Les résultats sont au-delà de mes attentes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
