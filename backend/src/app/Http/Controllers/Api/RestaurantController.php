<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class RestaurantController extends Controller
{
    #[OA\Get(
        path: "/api/restaurants",
        summary: "Get list of restaurants",
        description: "Returns a list of restaurants matching the keyword",
        tags: ["Restaurants"],
        parameters: [
            new OA\Parameter(
                name: "keyword",
                in: "query",
                required: false,
                description: "Search keyword for restaurant name (Default: null)",
                schema: new OA\Schema(type: "string")
            )
        ],
        responses: [
            new OA\Response(
                response: 200, // แนะนำให้ใช้ 200 สำหรับ GET request ปกติ
                description: "Successful operation",
                content: new OA\JsonContent(
                    type: "object",
                    properties: [
                        new OA\Property(property: "data", type: "array", items: new OA\Items(ref: "#/components/schemas/Restaurant")),
                        new OA\Property(property: "keyword", type: "string", nullable: true),
                        new OA\Property(property: "status", type: "boolean", example: true)
                    ]
                )
            ),
            new OA\Response(response: 401, description: "Unauthenticated")
        ]
    )]
    public function index(Request $request)
    {
        $keyword = $request->query('keyword');

        $restaurants = Restaurant::where('restaurant_name', 'LIKE', "%{$keyword}%")->get();

        return response()->json([
            'data' => $restaurants,
            'keyword' => $keyword,
            'status' => true,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
