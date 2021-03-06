<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// All listings - u kontroleru je nova zamjena za ovo
// Route::get('/listings', function() {
//     return view('listings', [
//         'heading'   => 'Latest listings',
//         'listings'  => Listing::all(),
//     ]);
// });

// All listings
/*
    @ * index je ime metode
*/
Route::get('/listings', [ListingController::class, 'index']);

// Single listing
// Route::get('/listings/{id}', function($id) {
//     return view('listing', [
//         'listing'  => Listing::find($id),
//     ]);
// });

// Single listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// // Single listing - Route Model Binding
// Route::get('/listings/{listing}', function(Listing $listing) {
//     $listing = Listing::find($listing);

//     if($listing) {   
//         return view('listing', [
//             'listing'  => $listing,
//         ]);
//     } else {
//         abort('404');
//     }
// });

// Single listing - Route Model Binding skraćeno
// Route::get('/listings/{listing}', function(Listing $listing) { 
//         return view('listing', [
//             'listing'  => $listing,
//         ]);
// });

