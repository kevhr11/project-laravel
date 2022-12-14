<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastName',
        'DUI',
        'phoneNumber',
        'email',
        'password',
        'idRoll',
        'imgProfile',
        'idGender',
        'dateOfBirth',
        'idToken',
        'idSelectProfile',
    ];


    public function selectprofile(){
        return $this->belongsTo(selectProfile::class,'idSelectProfile');
    }

    public function tokens(){
        return $this->belongsTo(tokens::class,'idToken');
    }

    public function roll(){
        return $this->belongsTo(rollId::class,'idRoll');
    }

    public function gender(){
        return $this->belongsTo(Gender::class,'idGender');
    }


}
?>