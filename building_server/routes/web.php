<?php

use App\Models\Listing;
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
    return view('listings', [
                "heading" => "Latest Listing",
                "listings" => Listing::all()
            ]);
});

Route::get('/listings/{id}', function($id){
    return view("listing", Listing::find($id));
})->where('id', '[0-9]+');