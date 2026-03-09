<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;

class AboutController extends Controller
{
    public function edit()
    {
        $aboutText = Setting::where('key', 'about_introduction')->first()->value ?? '';
        return view('admin.about.edit', compact('aboutText'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'about_introduction' => 'nullable|string',
        ]);

        Setting::updateOrCreate(
            ['key' => 'about_introduction'],
            ['value' => $request->about_introduction]
        );

        return redirect()->route('admin.dashboard')->with('success', 'Texte de présentation mis à jour avec succès.');
    }
}
