@extends('layouts.app')

@section('content')
	<div class="row d-flex justify-content-center">
		<div class="col-6">
            {{-- @forelse ($restaurants as $restaurant)                    --}}
			    <section class="card my-5">
                    <img src="{{ $restaurant->getImageUri() }}" class="card-img-top img-fluid" alt="restaurant image">
                    <div class="card-body">
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

                        <a href="#" class="btn btn-primary">Il mio Menù</a>
                    </div>
                </section>
                {{-- @empty
                    <div class="d-flex justify-content-center align-items-center my-5">
                        <h4>Non hai ancora registrato il tuo ristorante!</h4>
                    </div>
                @endforelse --}}
		</div>
	</div>
@endsection