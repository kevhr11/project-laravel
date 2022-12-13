<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillables = [
      'idCategory',
      'name',
      'description',
      'price',
      'img',
      'idStatus'
    ];

    public function Category(){
      return $this->hasMany(Category::class, 'id');
    }

    public function Service(){
      return $this->belongsTo(GetService::class, 'idService');
    }
}