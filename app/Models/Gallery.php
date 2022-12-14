<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable =['idTouristPlace','name','description'];

    public function TouristPlace(){
        return $this->belongsTo(TouristPlace::class,'idTouristPlace');
    }
}
