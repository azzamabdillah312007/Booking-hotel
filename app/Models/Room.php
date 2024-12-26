<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    Use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
       'hotel_id',
       'room_number',
       'type',
       'price_per_night',
       'availability'
    ];

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
