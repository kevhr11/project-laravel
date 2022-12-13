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

    public function Service(){
      return $this->belongsTo(BussinesProfile::class, 'idBussineProfile');
    }
}