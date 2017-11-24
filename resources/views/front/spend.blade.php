<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 24/11/2017
 * Time: 10:11
 */
?>
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <fieldset>
            <form action="{{route('spend.store')}}" method="post">
                {{ csrf_field() }}
                <div class="col-md-4">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                </div>
                <div class="col-md-4">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="price">
                </div>
                <div class="col-md-4">
                    <label for="pay_date">Date</label>
                    <input type="date" name="pay_date" class="form-control" id="pay_date" placeholder="JJ/MM/AAAA">
                </div>

                <div class="col-md-6">
                    <label class="col-md-2 control-label" for="users">Users</label>
                    <select id="Users" name="users" class="form-control" multiple="multiple">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->pseudo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">

                </div>
                <div class="col-xs-12">
                    <label class="col-md-2 control-label" for="description">Description dépense</label>
                    <textarea class="form-control" id="description" name="description"
                              placeholder="Description"></textarea>
                </div>
                <div class="col-md-12">
                    <label class="col-md-2 control-label" for="status">Status</label>
                    <select id="Users" name="status" class="form-control" multiple="multiple">
                        <option value="paid">Paid</option>
                        <option value="account">Account</option>
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