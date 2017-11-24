<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts,App\User;

class ChartController extends Controller
{
    public function index()
    {
        $chart = Charts::database(User::all(), 'bar', 'google')
            ->elementLabel("Total")
            ->GroupByYear();
        return view('chart.bar',compact('chart'));
    }
}
