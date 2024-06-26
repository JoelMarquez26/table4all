<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function provider()
    {
        return $this->hasOne(Provider::class, 'IDuser');
    }

    public function hasRol($rol)
    {
        return $this->rol === $rol;
    }

}

