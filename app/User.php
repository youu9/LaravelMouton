<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pseudo', 'email', 'password','isAdmin','trip_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin():bool
    {
        return $this->isAdmin === 1; // this looks for an admin column in your users table
    }

    public function balances(){
        return $this->hasOne('App\Balances');
    }

    public function spends(){
        return $this->belongsToMany('App\Spend')->withPivot('price');
    }

    public function part(){
        return $this->hasOne('App\Part');
    }

    public function trip(){
        return $this->belongsTo('App\Trip');
    }


}
