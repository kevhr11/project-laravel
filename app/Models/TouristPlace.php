<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristPlace extends Model
{
    use HasFactory;
    protected $fillable = [
        'namePlace',
        'location',
        'idMunicipalities',
        'description',
        'score',
        'idTouristPlaceType'
    ];


    public function municipalities(){
        return $this->belongsTo(Departament::class, 'idMunicipalities');
    }

    public function touristatt(){
        return $this->belongsTo(touristPlaceType::class, 'idTouristPlaceType');
    }
}