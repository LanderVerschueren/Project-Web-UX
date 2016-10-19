@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(\App\Offer::all()->count() > 0)
                            <h2>Jou toegevoegde offers</h2>
                            @foreach(\App\Offer::all() as $offer)
                                <p>1 offer</p>
                            @endforeach
                        @else
                            <h2>Je hebt nog geen offers toegevoegd</h2>
                            <a href="">voeg een nieuw offer toe</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection