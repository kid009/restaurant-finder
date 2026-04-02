<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: "Restaurant",
    title: "Restaurant Model",
    description: "ข้อมูลรายละเอียดของร้านอาหาร",
    properties: [
        new OA\Property(property: "id", type: "integer", example: 1),
        new OA\Property(property: "restaurant_name", type: "string", example: "Pad Thai Bang Sue"),
        new OA\Property(property: "restaurant_latitude", type: "number", format: "float", example: 13.804921),
        new OA\Property(property: "restaurant_longitude", type: "number", format: "float", example: 100.539012),
        new OA\Property(property: "restaurant_address", type: "string", example: "123 Pracharat Sai 2 Rd., Bang Sue"),
        new OA\Property(property: "restaurant_province", type: "string", example: "Bangkok"),
        new OA\Property(property: "created_at", type: "string", format: "date-time", example: "2024-05-15T12:00:00Z", nullable: true),
        new OA\Property(property: "updated_at", type: "string", format: "date-time", example: "2024-05-15T12:00:00Z", nullable: true),
    ]
)]
class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_name',
        'restaurant_latitude',
        'restaurant_longitude',
        'restaurant_address',
        'restaurant_province',
    ];
}
