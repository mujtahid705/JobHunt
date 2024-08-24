<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, "index"]);

// Single Listings
Route::get("/listings/{listing}", [ListingController::class, "show"]);

// Route::get("/listings/{id}", function ($id) {
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view("listing", [
//             "listing" => $listing
//         ]);
//     } else {
//         abort("404");
//     }

// });