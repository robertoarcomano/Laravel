<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;

Route::get('/', function () {
    $links = [
        ["url" => "/text", "content" => "text"],
        ["url" => "/animals", "content" => "animals"],
        ["url" => "/if_controller", "content" => "if_controller"],
    ];
    return view('welcome', compact("links"));
});

Route::get('/text', function () {
    return "text";
});

Route::get('/animals', function () {
    $options = ["Cat","Dog","Mouse"];
    return view('animals', compact('options'));
});

Route::get('/if_controller', [Controller1::class, 'if_controller']);

Route::middleware('api')
    ->prefix('api')
    ->group(base_path('routes/api.php'));