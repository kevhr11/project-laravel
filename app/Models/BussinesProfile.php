<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BussinesProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'description',
        'location',
        'idBussinesType',
        'message',
        'reviews',
        'idTourisPlace',
        'score'
    ];

    public function message(){
      return $this->belongsTo(message::class, 'message');
    }

    public function reviews(){
      return $this->belongsTo(Reviews::class, 'reviews');
    }

}