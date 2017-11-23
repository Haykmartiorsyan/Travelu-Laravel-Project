<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tour;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = tour::all();
        return view('travel.tour.tours', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $all_tour = tour::all();
        $tour = tour::find($id);
        $reviews = tour::find($id)->reviews;
        $galleries = tour::find($id)->gallery;
        $itinerary = tour::find($id)->itinerary;
        return view('travel.tour.tourdetail',compact('tour', 'reviews', 'galleries', 'itinerary', 'all_tour'));
    }
}
