<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class touristPlaceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    public function touristplace(){
        return $this->hasMany(TouristPlace::class,'id');
    }

}