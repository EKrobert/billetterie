<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OrderIntent;
use Illuminate\Http\Request;

class OrderIntentController extends Controller
{

    /**
     * @OA\Post(
     *     path="/api/order-intents",
     *     summary="Créer une intention de commande",
     *     tags={"Order Intents"},
     *     @OA\Parameter(
     *         name="order_intent_price",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="Prix total de l'intention de commande"
     *     ),
     *     @OA\Parameter(
     *         name="order_intent_type",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string"),
     *         description="Type de l'intention de commande"
     *     ),
     *     @OA\Parameter(
     *         name="user_email",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string"),
     *         description="Email de l'utilisateur"
     *     ),
     *     @OA\Parameter(
     *         name="user_phone",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string"),
     *         description="Téléphone de l'utilisateur"
     *     ),
     *     @OA\Parameter(
     *         name="expiration_date",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string", format="date-time"),
     *         description="Date d'expiration de l'intention de commande"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Erreur de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */

    public function store(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'order_intent_price' => 'required|numeric',
            'order_intent_type' => 'required|string|max:50',
            'user_email' => 'required|email|max:100',
            'user_phone' => 'required|string|max:20',
            'expiration_date' => 'required|date',
        ]);

        try {
            // Create the order intent
            $orderIntent = OrderIntent::create($validatedData);

            // Return success response
            return response()->json([
                'success' => true,
                'data' => $orderIntent,
                'message' => 'Intention de commande créée avec succès'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la création de l\'intention de commande: ' . $e->getMessage()
            ], 500);
        }
    }
}
