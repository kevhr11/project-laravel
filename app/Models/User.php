<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'lastName',
        'DUI',
        'phoneNumber',
        'email',
        'password',
        'imgProfile',
        'gender',
        'dateOfBirth',
        /* 'idtokensindigo', */
        'idSelectProfile',
    ];

    protected $hidden = [
        'password',
    ];

    public function selectprofile(){
        return $this->belongsTo(selectProfile::class,'idSelectProfile');
    }

    /* public function tokensindigo(){
        return $this->belongsTo(tokensindigo::class, 'idtokensindigo');
    }   */ 
    
    

}