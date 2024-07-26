<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour créer et stocker les articles (seulement pour les utilisateurs authentifiés)
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
});

// Route pour afficher les articles (accessible à tous)
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // Route pour afficher la liste des articles
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Route pour afficher le formulaire de contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');

// Route pour envoyer le formulaire de contact
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');

require __DIR__.'/auth.php';
