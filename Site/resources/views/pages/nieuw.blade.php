@extends('layouts.app')

@section('title', 'Nieuw offer toevoegen')

@section('content')
<form action="nieuw" method="post" enctype="multipart/form-data">
    <div class="container_row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="container_card">
                <div class="card"></div>
                <div class="card offer">
                    <h2 class="title">Offer toevoegen</h2>
                    <div class="container_row">
                        <div class="left">
                            <div class="container_column">
                                    <div id="input1">
                                        <label>Selecteer foto:</label><br>
                                        <input type="file" name="foto" accept="image/jpeg, image/png" id="foto">

                                    </div>
                                    <div id="input2">
                                        <label>Selecteer foto:</label><br>
                                        <input type="file" name="foto2" accept="image/jpeg, image/png" id="foto2">

                                    </div>
                                    <div id="input3">
                                        <label>Selecteer foto:</label><br>
                                        <input type="file" name="foto3" accept="image/jpeg, image/png" id="foto3">

                                    </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="form-group">
                                <span for="naam" class="borders control-label">Naam</span>
                                <input id="naam" type="text" class="form-control" name="naam" value="{{ old('naam') }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <span for="aantal" class="borders control-label">Aantal</span>
                                <input id="aantal" type="number" class="form-control" name="aantal" value="{{ old('aantal') }}" required autofocus>
                            </div>

                            <div class="form-group prijsInput">
                                <span for="prijs" class="borders control-label">Prijs</span>
                                <input id="prijs" type="number" step="any" class="form-control" name="prijs" value="{{ old('prijs') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="submit">
                            <span>Sla offer op!</span>
                        </button>
                    </div>
                </div> 
            </div> 
        </div>  
    </div> 
</form>
@endsection