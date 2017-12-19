<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable =[
        'trip',
        'start_date',
        'end_date',
        'admin_user_id',
    ];

    protected $table = 'trip';

    public function users(){
        return $this->hasMany('App\User');
    }
}
