<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, "index"]);

// Create Listings
Route::get("/listings/create", [ListingController::class, "create"]);

// Store Listing Data
Route::post("/listings", [ListingController::class, "store"]);

// Show Edit Form
Route::get("/listings/{listing}/edit", [ListingController::class, "edit"]);

// Update Listing
Route::put("listings/{listing}", [ListingController::class, "update"]);

// Delete Listing
Route::delete("listings/{listing}", [ListingController::class, "destroy"]);

// Single Listing
Route::get("/listings/{listing}", [ListingController::class, "show"]);
