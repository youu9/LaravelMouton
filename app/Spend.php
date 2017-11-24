<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 20/11/2017
 * Time: 16:25
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Spend extends Model
{
    protected $fillable =[
        'title',
        'description',
        'pay_date',
        'status',
        'price'
    ];

    protected $table = 'spends';

    public function users(){
        return $this->belongsToMany('App\User');
    }
}