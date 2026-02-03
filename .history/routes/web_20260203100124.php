<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Symfony\Component\Mailer\Transport\RoundRobinTransport;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'showLoginForm']);