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
        'gallery',
        'score',
        'idTouristAttractive'
    ];


    public function municipalities(){
        return $this->belongsTo(Departament::class, 'idMunicipalities');
    }

    public function touristatt(){
        return $this->belongsTo(TouristAtt::class, 'idTouristAttractive');
    }

    public function gallery(){
        return $this->hasMany(Gallery::class, 'id');
    }

}
