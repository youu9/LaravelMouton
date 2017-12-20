<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 19/12/2017
 * Time: 09:51
 */
?>
@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <h1> Créer un voyage </h1>
        <fieldset>
            <form action="{{route('trip.store')}}" method="post">
                {{ csrf_field() }}
                <div class="col-md-4">
                    <label for="trip">Trip name</label>
                    <input type="text" name="trip" class="form-control" id="trip" placeholder="trip">
                </div>
                <div class="col-md-4">
                    <label for="start_date">Date de départ</label>
                    <input type="date" name="start_date" class="form-control" id="start_date" placeholder="JJ/MM/AAAA">
                </div>

                <div class="col-md-4">
                    <label for="admin_user_id">Admin ID</label>
                    <input type="text" name="admin_user_id" class="form-control" id="admin_user_id" value="{{$u}}">
                </div>

                <div class="col-md-6">
                    <label class="col-md-2 control-label" for="users">Users</label>
                    <select id="Users" name="users" class="form-control" multiple="multiple">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->pseudo}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-xs-12">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </fieldset>
    </div>
</div>
@endsection
@extends('partials.footer')
