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
        'idGetServices',
        'idBussinesType',
        'certificate',
        'message',
        'reviews',
        'idTourisPlace',
        'score'
    ];

    public function getService(){
      return $this->belongsTo(GetService::class, 'idBussineProfile');
    }

    public function message(){
      return $this->belongsTo(message::class, 'message');
    }

    public function reviews(){
      return $this->belongsTo(Reviews::class, 'reviews');
    }

}
