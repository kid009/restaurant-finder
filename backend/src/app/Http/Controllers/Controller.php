<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: "1.0.0",
    title: "Restaurant Finder API",
    description: "API documentation for Restaurant Finder",
)]
#[OA\Server(
    url: "http://localhost:8081",
    description: "Local development server"
)]

class Controller {}
