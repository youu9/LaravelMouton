<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 19/12/2017
 * Time: 09:51
 */
?>

<h1> Créér un voyage </h1>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        </div>

        <div class="col-md-4">
                <label for="trip">Trip name</label>
                <input type="text" name="trip" class="form-control" id="trip" placeholder="trip">
            </div>
            <div class="col-md-4">
                <label for="start_date">Date de départ</label>
                <input type="start_date" name="start_date" class="form-control" id="start_date" placeholder="JJ/MM/AAAA">
            </div>


            <div class="col-md-6">
                <label class="col-md-2 control-label" for="users">Users</label>
                <select id="Users" name="users" class="form-control" multiple="multiple">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->pseudo}}</option>
                    @endforeach
                </select>

        </div>
    </div>
</div>