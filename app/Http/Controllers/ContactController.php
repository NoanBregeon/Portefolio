<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // TODO: Implémenter l'envoi de mail réel
        // Mail::to(config('mail.from.address'))->send(new ContactMail($request->validated()));

        return back()->with('success', 'Votre message a bien été envoyé !');
    }
}
