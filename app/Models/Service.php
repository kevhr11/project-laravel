<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillables = [
      'idCategoria',
      'name',
      'description',
      'price',
      'img',
      'idStatus'
    ];
}