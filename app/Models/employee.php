<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class employee extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $fillable = [
        'name',
        'email',
        'dob',
        'gender',
        'address',
        'phone',
        'salary',
    ];

    protected $hidden = [
       
        'remember_token',
    ];
}
