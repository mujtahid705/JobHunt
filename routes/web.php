<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, "index"]);

// Create Listings
Route::get("/listings/create", [ListingController::class, "create"]);

// Stor Listing Data
Route::post("/listings", [ListingController::class, "store"]);

// Show Edit Form
Route::get("/listings/{listing}/edit", [ListingController::class, "edit"]);

// Single Listings
Route::get("/listings/{listing}", [ListingController::class, "show"]);
