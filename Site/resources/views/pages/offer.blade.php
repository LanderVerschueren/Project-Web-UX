@extends('layouts.app')

@section('title', 'Aanbieden')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if($offers->count() > 0)
                            @if($offers->where('user_id', Auth::user()->id)->count() > 0)
                                <h1>Jou toegevoegde offers</h1>
                                <table id="offers">
                                    @foreach($offers as $offer)
                                        @if($offer->user_id == Auth::user()->id)
                                        <tr>
                                            <td>{{ $offer->naam }}</td>
                                            <td>{{ $offer->aantal }}</td>
                                            <td>{{ $offer->prijs }}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </table>
                            @else
                                <h1>Je hebt nog geen aanbiedingen toegevoegd</h1>
                            @endif

                            <br>
                            <a href="\nieuw">voeg een nieuw offer toe</a>
                        @else
                            <h1>Je hebt nog geen aanbiedingen toegevoegd</h1>

                            <a href="\nieuw">voeg een nieuw offer toe</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection