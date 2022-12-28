<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Review;
use App\Models\TourGuide;
use App\Models\Transaction;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard.dashboard', [
            'tour_guide' => TourGuide::count(),
            'destination' => Destination::count(),
            'package' => Package::count(),
            'transaction' => Transaction::count(),
            'review' => Review::count()
        ]);
    }
}
