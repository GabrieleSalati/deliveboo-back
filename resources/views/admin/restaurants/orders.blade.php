@extends('layouts.app')

@section('content')
    <div class="table-responsive mt-2">
        <table class="table table-striped">
            <thead>
                <tr class=" text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Visibile</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dishes as $dish)
                    <tr class="text-center">
                        <th scope="row">{{ $dish->id }}</th>
                        <td class="text-start fw-bold">{{ $dish->name }}</td>
                        <td class="text-start">{{ $dish->description }}</td>
                        <td>{{ $dish->price }}€</td>
                        <td> {{ $dish->visible ? 'Si' : 'No' }}</td>
                        <td class="action-cell">
                            <a class="btn btn-primary mx-1 my-1 px-2" href="{{ route('dishes.edit', [$dish]) }}"><i class="bi bi-wrench-adjustable"></i></a>
                            <a class="btn btn-primary mx-1 my-1 px-2" href="{{ route('dishes.show', [$dish]) }}"><i class="bi bi-zoom-in"></i></a>
                            <button class="btn btn-danger bi bi-trash mx-1 my-1 px-2" data-bs-toggle="modal"
                                data-bs-target="#delete-{{ $dish->id }}"></button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">Devi ancora aggiungere un piatto!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection