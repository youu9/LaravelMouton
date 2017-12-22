<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = Redis->get('user:profile:'.$id);

        return view('user.profile', ['user' => $user]);
    }
}
