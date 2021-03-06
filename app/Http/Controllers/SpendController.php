<?php

namespace App\Http\Controllers;

use App\Spend;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpendController extends Controller
{
    public function __construct()
    {
        view()->composer('front.spend', function ($view) {
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
        //
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
        //dump($request->all());
        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => ['required'],
            'pay_date' => 'date',
            'users' => 'required',
            'status' => 'nullable',
            'price' => 'integer|required',
        ]);

        $users = $request->users;
        $price = $request->price;

        if(count($users)>1){
            $price = $price / count($users);
        }

        $spend = Spend::create($request->all());
        $spend->users()->attach($users, ['price' => $price]);

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
