@extends('layouts.app')

@section('title', 'Nieuw offer toevoegen')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                    <form action="nieuw" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="naam" class="col-md-4 control-label">naam</label>

                                    <div class="col-md-6">
                                        <input id="naam" type="text" class="form-control" name="naam" value="{{ old('naam') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="aantal" class="col-md-4 control-label">aantal</label>

                                    <div class="col-md-6">
                                        <input id="aantal" type="number" class="form-control" name="aantal" value="{{ old('aantal') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group prijsInput">
                                    <label for="prijs" class="col-md-4 control-label">prijs</label>

                                    <div class="col-md-6">
                                        <input id="prijs" type="number" class="form-control" name="prijs" value="{{ old('prijs') }}" required>
                                    </div>
                                </div>

                                <div>
                                    <div class="col-md-4" id="input1">
                                        <br><br>
                                        <label>Select image to upload:</label><br>
                                        <input type="file" name="foto" accept="image/jpeg, image/png" id="foto">

                                    </div>
                                    <div class="col-md-4" id="input2" style="display: none;">
                                        <br><br>
                                        <label>Select image to upload:</label><br>
                                        <input type="file" name="foto2" accept="image/jpeg, image/png" id="foto2">

                                    </div>
                                    <div class="col-md-4" id="input3" style="display: none;">
                                        <br><br>
                                        <label>Select image to upload:</label><br>
                                        <input type="file" name="foto3" accept="image/jpeg, image/png" id="foto3">

                                    </div>
                                </div>


                                <input type="submit" value="Upload offer" name="submit" id="nieuwSubmit">
                            </form>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection