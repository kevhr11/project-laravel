<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristAtt extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'idStatu'
    ];

    public function touristplace(){
        return $this->hasMany(TouristPlace::class,'id');
    }

    public function status(){
        return $this->belongsTo(Status::class,'idStatu');
    }


}
