<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    protected $connection = 'external';
    protected $table = 'artisans'; // Nom de la table dans la base de données externe

    protected $fillable = [
        'Nom', 'Ville', 'Sexe', 'Competences', 'contact', 'PlageHoraire', 'MoyensPaiement'
    ];
}
