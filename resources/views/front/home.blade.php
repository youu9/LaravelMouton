@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>3 derniere depense.
            </h2>
            <div class="panel-group">

                Total dépense du voyage {{$totTrip}} €

                @foreach($spends as $spe)
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>{{$spe->title}}</h3>
                        <small>{{$spe->price}} € <span class="label label-primary"> {{$spe->status}}</span></small>
                    </div>
                    <div class="panel-body">{{$spe->description}}</div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Dashboard
                <small> - You are logged in as <strong>{{$u->pseudo}}</strong></small>
            </h2>
            <p>Récapitulatif des dépenses du séjour. <a type="button" class="btn btn-primary"
                                                        href="{{route('addSpend')}}">Ajout dépense</a></p>

            <div class="panel-group">

                @foreach($u->spends as $spend)
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>{{$spend->title}}</h3>
                        <small>{{$spend->price}} € <span class="label label-primary"> {{$spend->status}}</span></small>
                    </div>
                    <div class="panel-body">{{$spend->description}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@extends('partials.footer')
