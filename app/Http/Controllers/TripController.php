<?php

namespace App\Http\Controllers;

use App\Mail\TripAdd;
use App\Mail\Welcome;
use App\Trip;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TripController extends Controller
{
    public function __construct()
    {
        view()->composer('admin.addTrip', function ($view) {
            $users = User::all();
            $u = Auth::id();
            $view->with(compact('users', 'u'));
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.addTrip');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'trip' => 'required|max:100',
            'start_date' => 'date',
            'admin_user_id' => 'required',
            'users' => 'required',
        ]);

        $trip = Trip::create($request->all());

        $ids = $request->users;

        foreach ($ids as $id) {
            User::find($id)->update(['trip_id' => 1]);
            //Envoi mail pour new trip
            Mail::to(User::find($id))->send(new TripAdd(User::find($id)));
        }
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
