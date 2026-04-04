<?php

namespace App\Services;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Cache;

class RestaurantService
{
    public function searchRestaurant(?string $keyword): array
    {
        $cleanKeyword = trim($keyword);

        if (empty($cleanKeyword)) {
            $cleanKeyword = 'Bang Sue';
        }

        $cacheKey = 'search_' . strtolower(str_replace(' ', '_', $cleanKeyword));

        $restaurants = Cache::remember($cacheKey, 3600, function () use ($cleanKeyword) {
            return Restaurant::where('restaurant_name', 'LIKE', "%{$cleanKeyword}%")->get();
        });

        return [
            'keyword' => $cleanKeyword,
            'data' => $restaurants
        ];
    }
}
