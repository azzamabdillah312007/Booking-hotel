<?php

namespace App\Models;

use App\Models\Room;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    Use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
       'user_id',
       'room_id',
       'start_date',
       'end_date',
       'status',
       'total_price'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

}
