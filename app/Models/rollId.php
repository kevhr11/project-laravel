<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rollId extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function Users(){
        return $this->hasMany(Users::class, 'id');
    }
}
