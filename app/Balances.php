<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 20/11/2017
 * Time: 16:26
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balances extends Model
{

    public function user(){
        return $this->belongsTo('App\User');
    }
}