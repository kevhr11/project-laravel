<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetService extends Model
{
    use HasFactory;
    protected $fillables = [
        'idService',
        'idBussineProfile'
    ];

    public function Service(){
      return $this->hasMany(Service::class, 'id');
    }
}