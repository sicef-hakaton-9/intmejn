<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    public function place_type()
    {
        return $this->belongsTo(PlaceType::class, 'place_type_id');
    }
}
