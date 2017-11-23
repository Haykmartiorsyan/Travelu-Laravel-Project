<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tour;
class PagesController extends Controller
{
    public function index() {
        $tours = tour::all();
        return view('travel.home', compact('tours'));
    }

    public function about() {
        return view('travel.about');
    }


    public function contact() {
        return view('travel.contact');
    }
}
