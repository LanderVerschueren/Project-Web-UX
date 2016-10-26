@extends('layouts.app')

@section('pageTitle')
    <h1>Dashboard - Offers</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <h1>Edit offer {{ $offer->id }}</h1>
                        <form action="offers" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="naam" class="col-md-4 control-label">naam</label>

                                <div class="col-md-6">
                                    <input id="naam" type="text" class="form-control" name="naam" value="{{ $offer->naam }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="aantal" class="col-md-4 control-label">aantal</label>

                                <div class="col-md-6">
                                    <input id="aantal" type="integer" class="form-control" name="aantal" value="{{ $offer->aantal }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group prijsInput">
                                <label for="prijs" class="col-md-4 control-label">prijs</label>

                                <div class="col-md-6">
                                    <input id="prijs" type="integer" class="form-control" name="prijs" value="{{ $offer->prijs }}" required>
                                </div>
                            </div>

                            <div>
                                <div class="col-md-4">
                                    <label>Current image 1:</label><br>
                                    <img src="/images/{{ $offer->foto }}" class="offerpanel-image">

                                    <label>Select image to upload:</label><br>
                                    <input class="imageUpload" accept="image/gif, image/jpeg, image/png" type="file" name="foto" id="editFotoUpload"">
                                </div>
                                <div class="col-md-4">
                                    <label>Current image 2:</label><br>
                                    @if($offer->foto2 != null)
                                        <img src="/images/{{ $offer->foto2 }}" class="offerpanel-image">
                                    @else
                                        <img src="/img/noImage.png" class="offerpanel-image">
                                    @endif

                                    <label>Select image to upload:</label><br>
                                    <input class="imageUpload" accept="image/gif, image/jpeg, image/png" type="file" name="foto2" id="editFotoUpload">
                                </div>
                                <div class="col-md-4">
                                    <label>Current image 3:</label><br>
                                    @if($offer->foto3 != null)
                                        <img src="/images/{{ $offer->foto3 }}" class="offerpanel-image">
                                    @else
                                        <img src="/img/noImage.png" class="offerpanel-image">
                                    @endif

                                    <label>Select image to upload:</label><br>
                                    <input class="imageUpload" accept="image/gif, image/jpeg, image/png" type="file" name="foto3" id="editFotoUpload">
                                </div>
                            </div>

                            <input type="submit" value="Save offer" name="submit" id="nieuwSubmit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection