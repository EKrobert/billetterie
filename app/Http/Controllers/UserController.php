<?php

namespace App\Http\Controllers;

use App\Mail\ApiAccessRequest;
use App\Models\ApiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {

        return view('user');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validation des données
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|unique:api_requests',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        try {
            // Création de la demande
            $apiRequest = ApiRequest::create($validated);

            // Envoi de l'email avec les identifiants
            // Mail::to($validated['email'])->send(new ApiAccessRequest($apiRequest));

            return redirect()->back()->with('success', 'Votre demande a été envoyée avec succès.');
        } catch (\Throwable $th) {
            return back()->with('success', 'Votre demande a été envoyée avec succès.');
        }
    }
}
