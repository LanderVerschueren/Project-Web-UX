@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
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
                                        <input id="aantal" type="integer" class="form-control" name="aantal" value="{{ old('aantal') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="prijs" class="col-md-4 control-label">prijs</label>

                                    <div class="col-md-6">
                                        <input id="prijs" type="integer" class="form-control" name="prijs" value="{{ old('prijs') }}" required>
                                    </div>
                                </div>

                                <div>
                                    <br><br>
                                    <label>Select image to upload:</label><br>
                                    <input type="file" name="foto" id="foto">

                                    <input type="submit" value="Upload Image" name="submit">
                                </div>


                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection