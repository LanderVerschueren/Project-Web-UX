@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(\App\Offer::all()->count() > 0)
                            <h2>Jou toegevoegde offers</h2>
                            <table id="offers">
                                @foreach(\App\Offer::all() as $offer)
                                    @if($offer->user_id == Auth::user()->id)
                                    <tr>
                                        <td>{{ $offer->naam }}</td>
                                        <td>{{ $offer->aantal }}</td>
                                        <td>{{ $offer->prijs }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            </table>

                            <a href="\nieuw">voeg een nieuw offer toe</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection