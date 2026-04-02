<?php

use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::resource('/restaurants', RestaurantController::class);
