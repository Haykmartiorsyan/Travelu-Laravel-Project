<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function _construct() {
        $this->middleware('admin');
    }
    public function dashboard() {
        return view('admin.layout');
    }
}
