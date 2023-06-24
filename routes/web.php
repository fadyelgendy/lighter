<?php

use Lighter\Framework\Facades\Router;

Router::get("/", [\App\Controllers\HomeController::class, 'index']);