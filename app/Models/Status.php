<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function TouristAtt(){
        return $this->hasMany(TouristAtt::class, 'id');
    }

    public function Service(){
        return $this->hasMany(Service::class, 'id');
    }


}
