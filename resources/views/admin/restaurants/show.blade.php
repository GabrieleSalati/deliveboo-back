@extends('layouts.app')

@section('content')
	<div class="row justify-content-center">
		<div class="col-lg-6">
			{{-- @dump($restaurant) --}}
			@if (isset($restaurant))
				<section class="card my-5">
					<img src="{{ $restaurant->getPictureUri() }}" class="card-img-top img-fluid" alt="restaurant image">
					<div class="card-body d-flex flex-column">
						<h5 class="card-title mb-3">{{ $restaurant->restaurant_name }}</h5>

						<p class="card-text">
							<strong> Categorie: </strong>
							@foreach ($restaurant->categories as $category)
								{!! $category->getPillHTML() !!}
							@endforeach
						</p>

						<p class="card-text">
							<strong> Indirizzo: </strong> {{ $restaurant->address }}
						</p>

						<p class="card-text">
							<strong> Partita IVA: </strong> {{ $restaurant->p_iva }}
						</p>

						<p class="card-text">
							<strong> Email: </strong> {{ $user_data['email'] }}
						</p>

						<div class="d-flex justify-content-center gap-2">
							<a href="{{ route('dishes.index') }}" class="btn btn-primary w-50 align-self-center">Il mio Menù</a>
							<a href="{{ route('orders.index') }}" class="btn btn-secondary w-50 align-self-center">I mie Ordini</a>
						</div>
					</div>
				</section>
			@endif
		</div>
	</div>
@endsection
