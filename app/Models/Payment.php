<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    Use HasFactory;

    protected $table = 'hotels';

    protected $fillable = [
       'booking_id',
       'amount',
       'payment_date',
       'payment_method',
       'status'
    ];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }


}
