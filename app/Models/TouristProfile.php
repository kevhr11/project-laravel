<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser',
        'description',
        'location',
        'message',
        'reviews',
        'idTouristPlaces',
        'idGallery'
    ];

    public function users(){
        return $this->belongsTo(Users::class,'idUser');
    }

}
