<?php

namespace App\Models;

use Faker\Provider\sv_SE\Municipality;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function municipalities(){
        return $this->hasMany(Municipalitie::class, 'id');
    }

}
