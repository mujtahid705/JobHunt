<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, "index"]);

// Create Listings
Route::get("/listings/create", [ListingController::class, "create"]);

// Post Listings
Route::post("/listings", [ListingController::class, "store"]);

// Single Listings
Route::get("/listings/{listing}", [ListingController::class, "show"]);
