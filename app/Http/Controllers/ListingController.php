<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show All listings
    // public function index() {
    //     return view('listings.index', [
    //         'heading'   => 'Latest listings',
    //         'listings'  => Listing::all(),
    //     ]);
    // }

    // Sortiranje po najnovijem
    // public function index() {
    //     // dd(request('tag'));
    //     return view('listings.index', [
    //         'listings'  => Listing::latest()->get(),
    //     ]);
    // }

    // Sortiranje po tagu - zapravo 
    public function index() {
        // dd(request('tag'));
        return view('listings.index', [
            'listings'  => Listing::latest()->filter(['tag'])->get(),
        ]);
    }


    // Show single listings
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing'  => $listing,
        ]);
    }
}
