<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['dest_name', 'dest_description', 'dest_image', 'tguide_id'];
    //protected $guarded = [];

    public function tour_guide()
    {
        return $this->belongsTo(TourGuide::class, 'tguide_id');
    }
}
