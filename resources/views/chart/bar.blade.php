<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 24/11/2017
 * Time: 09:14
 */
?>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Résumé des dépenses</div>
                <div class="panel-body">
                    {!! $chart->html() !!}
                </div>
            </div>
        </div>
    </div>
</div>

{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection
@extends('partials.footer')