<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BussinesType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function bussinesProfile(){
        return $this->hasMany(bussinesProfile::class, 'id');
    }
}
