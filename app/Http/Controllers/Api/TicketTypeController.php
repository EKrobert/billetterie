<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TicketTypes;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{

   /**
     * @OA\Get(
     *     path="/api/events/{id}/ticket-types",
     *     summary="Get all ticket types for an event",
     *     tags={"Ticket Types"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Event ID",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean")  
     *             ),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function show($id)
    {
        $ticketTypes = TicketTypes::where('ticket_type_event_id', $id)->get();
        return response()->json([
            'success' => true,
            'data' => $ticketTypes,
            'message' => 'Liste des types de tickets récupérée avec succès'
        ]);
    }
}
