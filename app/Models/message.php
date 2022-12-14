<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable =['idBussinesProfile','idTouristProfile','name','input','output'];

    public function BussinesProfile(){
        return $this->belongsTo(BussinesProfile::class,'idBussinesProfile');
    }

    public function TouristProfile(){
        return $this->belongsTo(TouristProfile::class,'idTouristProfile');
    }
}
