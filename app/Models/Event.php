<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['start_date', 'end_date'];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function event_type()
    {
        return $this->belongsTo(EventType::class);
    }
}
