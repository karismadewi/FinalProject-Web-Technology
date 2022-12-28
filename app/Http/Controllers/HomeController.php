<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $tour_guides = TourGuide::all();
        $destinations = Destination::all();
        return view('frontpage.home', [
            'tour_guides' => $tour_guides,
            'destinations' => $destinations
        ]);
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
    public function review() {
        return view('frontpage.review');
    }
    public function service() {
        return view('frontpage.service', [
            'tour_guides' => TourGuide::all(),
        ]);
    }
}
