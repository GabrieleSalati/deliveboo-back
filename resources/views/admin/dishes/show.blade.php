@extends('layouts.app')

@section('content')
<div class="card my-5">
    <div class="row g-0">
        <div class="col-md-3 align-self-center">
            <img class="img-fluid" src="{{ $dish->getPictureUri() }}" alt="">
        </div>
        <div class="col-md-9">
            <div class="card-body">
                <h4 class="card-title text-center fw-bold fs-3">{{ $dish->name }}</h4>
                <h6 class="card-title text-center fw-bold mt-4">Descrizione:</h6>
                <p class="card-text text-center">{{ $dish->description }}</p>
                <p class="card-text text-center"><span class="fw-bold">Prezzo:</span> {{ $dish->price }}€</p>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary mx-1 py-1 px-2" href="{{ route('dishes.index', [$dish]) }}"><i class="bi bi-arrow-left"></i></a>
@endsection
