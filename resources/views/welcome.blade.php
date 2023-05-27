@extends('layouts.app')
@section('title', 'Home')
@section('content')
	<div class="jumbotron p-5 mb-4 bg-light rounded-3">
		<div class="container">
			<h1 class="py-3">Benvenuto su <span class="text-danger">DeliveBoo</span> ristoratore!</h1>
			<h2 class="mb-3">Non sei ancora dei nostri? <span class="text-danger">Iscriviti!</span></h2>

			<div id="carousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="carousel-item active">
						{{-- placeholder --}}
						<img class="img-fluid" src="{{ asset('images/6.png') }}" alt="Immagine di errore 403">
					</div>
					<div class="carousel-item">
						{{-- placeholder --}}
						<img class="img-fluid" src="{{ asset('images/7.png') }}" alt="Immagine di errore 403">
					</div>
					<div class="carousel-item">
						{{-- placeholder --}}
						<img class="img-fluid" src="{{ asset('images/8.png') }}" alt="Immagine di errore 403">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon bg-danger rounded text-white" aria-hidden="true"></span>
					<span class="visually-hidden ">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
					<span class="carousel-control-next-icon bg-danger rounded" aria-hidden="true"></span>
					<span class="visually-hidden ">Next</span>
				</button>
			</div>
		</div>
	</div>

@endsection
