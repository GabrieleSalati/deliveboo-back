@extends('layouts.app')

@section('content')
           
        <section class="card" style="width: 18rem;">
            <img src="{{$restaurant->getImageUri()}}" class="card-img-top img-fluid" alt="restaurant image">
            <div class="card-body">
                <h5 class="card-title mb-3">{{$restaurant->restaurant_name}}</h5>
                <p class="card-text">
                    <strong> Indirizzo: </strong> {{$restaurant->address}}
                </p>

                <p class="card-text">
                    <strong> Partita IVA: </strong> {{$restaurant->p_iva}}
                </p>

                <p class="card-text">
                    <strong> Email: </strong> {{$restaurant->users()->email}}
                </p>                 

                <a href="#" class="btn btn-primary">Il mio Menù</a>
            </div>
        </section>
            
@endsection