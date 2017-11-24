@extends('layouts.app')


@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif


                    You are logged in!


                </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Dashboard <small> - You are logged in as <strong>{{$uLog->pseudo}}</strong> </small></h2>
                    <p>Récapitulatif des dépenses du séjour. <button type="button" class="btn btn-primary">Ajout dépense</button></p>

                    <div class="panel-group">
                        @foreach($uLog->spends as $spend)
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>{{$spend->title}}</h3><small>{{$spend->price}}€</small></div>
                            <div class="panel-body">{{$spend->description}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
