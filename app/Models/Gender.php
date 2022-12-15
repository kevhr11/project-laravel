<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
];

    public function Users(){
        return $this->hasMany(Users::class, 'id');
    }

    public function Gender(){
        return $this->hasMany(Gender::class, 'id');
    }


}
