<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Even when I write Route::get('/', function(){});
// we still need to go to localhost/api/
// why ? Because we are in the api router class
// this means here by default the URL is localhost/api
// however in the case of web it was localhost
Route::get('/', function(){
    return response(json_encode(
        [
            "php" => "laravel",
            "js" => "Node.js",
            "java" => "spring-boot",
        ]
    ), 200);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
