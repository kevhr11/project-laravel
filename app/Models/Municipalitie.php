<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipalitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'idDepartaments'

    ];


    public function departaments(){
        return $this->belongsTo(Departament::class, 'idDepartaments');
    }

    public function turistPlaces(){
        return $this->hasMany(TouristPlace::class, 'id');
    }


}
