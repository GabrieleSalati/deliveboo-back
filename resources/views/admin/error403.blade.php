@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <img class="img-fluid" src="{{ asset('images/error403-image.png') }}" alt="Immagine di errore 403">
    </div>
    <div id="buttons" class="mt-5">
        <a href="{{ url('/home') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
    </div>
@endsection

<style>
    .img{
        height: 80vh;
        width: 80vw;
        overflow-x: hidden;
    }
</style>