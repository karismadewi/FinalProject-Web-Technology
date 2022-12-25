<?php

namespace App\Models;

// use App\Models\TourGuide;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tour_guide()
    {
        return $this->belongsTo(TourGuide::class, 'tguide_id');
    }
}
