<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts,App\User;

class ChartController extends Controller
{
    public function index()
    {
        Charts::multi('line', 'highcharts')
            ->setColors(['#ff0000', '#00ff00', '#0000ff'])
            ->setLabels(['One', 'Two', 'Three'])
            ->setDataset('Test 1', [1,2,3])
            ->setDataset('Test 2', [0,6,0])
            ->setDataset('Test 3', [3,4,1]);
        return view('chart.bar',compact('chart'));
    }
}
