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
     *     summary="Create a new order intent",
     *     tags={"Order Intents"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/OrderIntent")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="data", ref="#/components/schemas/OrderIntent"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        $orderIntent = OrderIntent::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $orderIntent,
            'message' => 'Intention de commande créée avec succès'
        ]);
    }
}
