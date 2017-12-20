<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 23/11/2017
 * Time: 10:27
 */

namespace App\Http\Controllers;


use App\Spend;
use App\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{

    public function spends()
    {
        $spends = Spend::orderBy('pay_date', 'DESC')->take(3)->get();
        $spendsOrd = Spend::all();
        $u = Auth::user();
        $total = Spend::total();
        $tot = $total[0];


        return view('front.home', compact('spends', 'u', 'spendsOrd', 'tot'));
    }

    public function addSpend()
    {
        $spends = Spend::all();
        $u = Auth::id();
        $users = User::all();
        $uLog = User::findOrFail($u);

        return view('front.spend', compact('spends', 'uLog', 'users'));
    }

}