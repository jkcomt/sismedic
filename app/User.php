<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    protected $table = 'users';

    protected $fillable = [
        'name', 'password','cargo_id','personal_id','perfil_id','estado','remember_token'
    ];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function perfil(){
        return $this->belongsTo(Perfil::class);
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
