<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('frontpage.home');
    }
    public function booking() {
        return view('frontpage.booking');
    }
    public function history() {
        return view('frontpage.history');
    }
    public function profile() {
        return view('frontpage.profile');
    }
}
