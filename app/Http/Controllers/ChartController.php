<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Charts;

class ChartController extends Controller
{

    public function index()
    {
        $users = User::All();
        $tab = [];
        $tot =[];
        foreach ($users as $user) {
            array_push($tab, $user->pseudo);
            $spent = $user->spends;
            foreach ($spent as $s){
               //array_push($tot,$s->pivot->price);
                dump($s->pivot->price);
            }
        }
        dump($tot);

        //$users = User::All();
        dump($users[0]->spends);

        $spends = $users[0]->spends;

        dump($spends[0]->pivot->price);

        $chart = Charts::multi('bar', 'material')
            // Setup the chart settings
            ->title("My Cool Chart")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400)// Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Element 1', [5, 20, 100,45,85,46,56,78,19,100])

            // Setup what the values mean
            ->labels($tab);

        return view('chart.bar', ['chart' => $chart]);
    }
}
