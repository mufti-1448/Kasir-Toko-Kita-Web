<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Symfony\Component\Mailer\Transport\RoundRobinTransport;
use

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'showLoginForm']);
