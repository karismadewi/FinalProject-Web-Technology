<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tour_guide()
    {
        return $this->belongsTo(TourGuide::class, 'tgd_id');
    }
    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destn_id');
    }
}
