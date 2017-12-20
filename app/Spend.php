<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 20/11/2017
 * Time: 16:25
 */

namespace App;
use DB;

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
        return $this->belongsToMany('App\User')->withPivot('price');
    }

    public function scopeTotal($query){

        return $query->select(DB::raw('SUM(price) as total'))->get()->toArray();
    }
}