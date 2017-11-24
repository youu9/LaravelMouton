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
    public function __construct()
    {
        view()->composer('front.home', function ($view) {
            $users = User::all();
            $view->with('users', $users);

        });
    }

    public function spends()
    {
        $spends = Spend::orderBy('pay_date', 'DESC')->take(3)->get();
        $spendsOrd = Spend::all();
        $users = User::all();
        $u = Auth::user();


        return view('front.home', compact('spends', 'users', 'u', 'spendsOrd'));
    }

    public function addSpend()
    {
        $spends = Spend::all();
        $users = User::all();
        $u = Auth::id();
        $uLog = User::findOrFail($u);

        return view('front.spend', compact('spends', 'users', 'uLog'));
    }
}