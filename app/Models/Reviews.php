<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = ['idBussinesProfile','idTouristProfile','description','score'];

    public function bussinesProfile (){
        return $this->hasMany(bussinesProfile ::class, 'id');
    }

    public function TouristProfile  (){
        return $this->hasMany(TouristProfile  ::class, 'id');
    }
}
