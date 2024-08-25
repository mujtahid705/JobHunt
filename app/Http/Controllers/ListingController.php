<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show All Listings
    public function index() {
        return view('listings.index', [
            "listings" => Listing::latest()->filter(request(["tag", "search"]))->get()
        ]);
    }

    // Show Single Listing
    public function show(Listing $listing) {
        return view("listings.show", [
            "listing" => $listing
        ]);
    }
}
