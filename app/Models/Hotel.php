<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    Use HasFactory;

    protected $table = 'hotels';

    protected $fillable = [
       'name',
       'address',
       'description'
    ];

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
