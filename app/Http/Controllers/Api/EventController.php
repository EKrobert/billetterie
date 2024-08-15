<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     /**
     * @OA\Get(
     *     path="/api/events",
     *     summary="Afficher tous les événements",
     *     tags={"Events"},
     *     @OA\Response(
     *         response=200,
     *         description="Une liste d'événements",
     *     )
     * )
     */
    public function index()
    {
        $events = Event::where('event_status', 'upcoming')->paginate(10);
        return response()->json([
            'success' => true,
            'data' => $events,
            'message' => 'Liste des événements récupérée avec succès'
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            $request->validate([
                'category' => 'required|in:Autre,Concert-Spectacle,Diner Gala,Festival,Formation',
                'description' => 'required',
                'title' => 'required|max:30',
                'date' => 'required|date',
                'image_url' => 'required|max:200',
                'city' => 'required|max:100',
                'address' => 'required|max:200',
                'status' => 'required|in:upcoming,completed,cancelled',
            ]);
    
            $event = Event::create($request->all());
            return response()->json($event, 201);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
