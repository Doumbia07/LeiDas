<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller
{
    public function showForm()
    {
        $artisans = User::all();
        return view('contact', compact('artisans'));
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'artisan_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $artisan = User::find($request->artisan_id);

        // Envoyer l'email à l'artisan
        Mail::send([], [], function ($message) use ($request, $artisan) {
            $message->to($artisan->email)
                ->subject('Nouveau message de contact')
                ->from($request->email, $request->name)
                ->setBody($request->message, 'text/html');
        });

        return redirect()->route('contact.show')->with('success', 'Votre message a été envoyé avec succès!');
    }
}
