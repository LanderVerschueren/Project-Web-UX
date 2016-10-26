@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="text-center">dashboard</h1>
                        <p><a href="/dashboard/users">beheer users</a></p>
                        <p><a href="/dashboard/offers">beheer offers</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection