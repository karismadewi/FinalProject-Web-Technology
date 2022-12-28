<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $packages = Package::all();
        $destinations = Destination::all();
        $tour_guides = TourGuide::all();

        return view('frontpage.home', [
            'packages' => Package::with(['tour_guide', 'destination'])->get(),
            'destinations' => $destinations,
            'tour_guides' => $tour_guides,
        ]);
    }
    public function booking($id) {
        // $data = Package::with(['tour_guide', 'destination'])->where('id', $id)->first();
        return view('frontpage.booking', [
            'packages' => Package::with(['tour_guide', 'destination'])->where('id', $id)->first(),
            'tour_guides' => TourGuide::all(),
        ]);
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
