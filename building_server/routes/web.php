<?php

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    $sendData = ["foo" => "bar", "mayank" => "mudgal"];
    // lets write some types
    $name = "Mayank Mudgal";
    $isSingle = true;
    $totalPhpHours = 5;
    $weight = 75.6;
    $arr = [$name, $isSingle, $weight];
    return response("<h1> Mayank Mudgal 🤣</h1>", 200);
});

Route::get('/posts/{id}', function($id){
    return response('Post Number: ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    //dump($request->query->parameters);
    dump($request->name);
});