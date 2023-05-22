@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1>Benvenuto su <span class="text-danger">DeliveBoo</span> ristoratore!</h1>

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    {{-- placeholder --}}
                    <img class="img-fluid" src="{{ asset('images/error403-image.png') }}" alt="Immagine di errore 403">
                  </div>
                  <div class="carousel-item">
                    {{-- placeholder --}}
                    <img class="img-fluid" src="{{ asset('images/error403-image.png') }}" alt="Immagine di errore 403">
                  </div>
                  <div class="carousel-item">
                    {{-- placeholder --}}
                    <img class="img-fluid" src="{{ asset('images/error403-image.png') }}" alt="Immagine di errore 403">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>

    
@endsection
