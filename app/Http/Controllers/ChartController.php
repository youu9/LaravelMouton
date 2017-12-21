<?php

namespace App\Http\Controllers;

use App\Spend;
use App\User;

use App\Http\Requests;
use Charts;

class ChartController extends Controller
{

    public function index()
    {
        $users = User::All();
        //List des pseudo utilisateur.
        $tab = [];
        //Somme de spend de chaque utilisateur
        $tot = [];
        //Somme spend total du Trip
        $total = Spend::total();
        $totTrip = $total[0];

        foreach ($users as $user) {
            array_push($tab, $user->pseudo);
            $spends = $user->spends;
            $sum = 0;
            foreach ($spends as $spend) {
                $sum += $spend->pivot->price;
            }
            array_push($tot, $sum);
        }

        $chart = Charts::multi('bar', 'material')
            // Setup the chart settings
            ->title("Trip chart")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400)// Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Spend/user', $tot)
            // Setup what the values mean
            ->labels($tab);

        return view('chart.bar', compact('chart', 'totTrip'));
    }
}
