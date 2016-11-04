@extends('layouts.app')

@section('title', 'Dashboard - Offers')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Editing {{ $offer->naam }}</h2>
    </div>
    <div class="panel-body">
        {!! Form::model($offer, ['url' => ['/editOffer', $offer->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('naam', 'Naam:', ['class' => 'control-label']) !!}
                {!! Form::text('naam', null, array('required', 'class' => 'form-control', 'placeholder' => 'Naam')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('aantal', 'Aantal:', ['class' => 'control-label']) !!}
                {!! Form::text('aantal', null, array('required', 'class' => 'form-control', 'placeholder' => 'Aantal')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('prijs', 'Prijs:', ['class' => 'control-label']) !!}
                {!! Form::text('prijs', null, array('required', 'class' => 'form-control', 'placeholder' => 'Prijs')) !!}
            </div>
            <div class="form-group">
                <!-- IMAGE PREVIEW -->
                <div class="col-md-4">
                    @if($offer->foto != null)
                        <img class="pictureModal1 temporary" src="/images/{{ $offer->foto }}">
                    @else
                        <img class="temporary" src="/img/noImage.png">
                    @endif
                    {!! Form::label('foto', 'Foto:', ['class' => 'control-label']) !!}
                    {!! Form::file('foto', null, array('required', 'class' => 'form-control')) !!}
                </div>
                <div class="col-md-4">
                    @if($offer->foto2 != null)
                        <img class="pictureModal1 temporary" src="/images/{{ $offer->foto2 }}">
                    @else
                        <img class="temporary" src="/img/noImage.png">
                    @endif
                    {!! Form::label('foto2', 'Foto:', ['class' => 'control-label']) !!}
                    {!! Form::file('foto2', null, array('required', 'class' => 'form-control')) !!}
                </div>
                <div class="col-md-4">
                    @if($offer->foto3 != null)
                        <img class="pictureModal1 temporary" src="/images/{{ $offer->foto3 }}">
                    @else
                        <img class="temporary" src="/img/noImage.png">
                    @endif
                    {!! Form::label('foto3', 'Foto:', ['class' => 'control-label']) !!}
                    {!! Form::file('foto3', null, array('required', 'class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Sla offer op') !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection


<!--
                            <div>
                                <div class="col-md-4">
                                    <label>Current image 1:</label><br>
                                    <img class="temporary" src="/images/{{ $offer->foto }}" class="offerpanel-image">

                                    <label>Select image to upload:</label><br>
                                    <input class="imageUpload" accept="image/gif, image/jpeg, image/png" type="file" name="foto" id="editFotoUpload"">
                                </div>
                                <div class="col-md-4">
                                    <label>Current image 2:</label><br>
                                    @if($offer->foto2 != null)
                                        <img class="temporary" src="/images/{{ $offer->foto2 }}" class="offerpanel-image">
                                    @else
                                        <img class="temporary" src="/img/noImage.png" class="offerpanel-image">
                                    @endif

                                    <label>Select image to upload:</label><br>
                                    <input class="imageUpload" accept="image/gif, image/jpeg, image/png" type="file" name="foto2" id="editFotoUpload">
                                </div>
                                <div class="col-md-4">
                                    <label>Current image 3:</label><br>
                                    @if($offer->foto3 != null)
                                        <img class="temporary" src="/images/{{ $offer->foto3 }}" class="offerpanel-image">
                                    @else
                                        <img class="temporary" src="/img/noImage.png" class="offerpanel-image">
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

    -->