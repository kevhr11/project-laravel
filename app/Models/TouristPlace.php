<?php

namespace App\Models;

use Faker\Provider\sv_SE\Municipality;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristPlace extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
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





}
