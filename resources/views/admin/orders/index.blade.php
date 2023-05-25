@extends('layouts.app')

@section('content')
    <div class="table-responsive mt-2">
        <table class="table table-striped my-3">
            <thead>
                <tr class=" text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Email</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Totale</th>
                    <th scope="col">Totale + spedizione</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr class="text-center">
                        <th scope="row">{{ $order->id }}</th>
                        <td class="text-start fw-bold">{{ $order->guest_name }}</td>
                        <td class="text-start">{{ $order->email }}</td>
                        <td>{{ $order->address }}€</td>
                        <td> {{ $order->telephone }}</td>
                        <td> {{ $order->bill_no_shipping }}</td>
                        <td> {{ $order->total_bill }}</td>
                        {{-- <td class="action-cell">
                            <a class="btn btn-primary mx-1 my-1 px-2" href="{{ route('dishes.edit', [$dish]) }}"><i class="bi bi-wrench-adjustable"></i></a>
                            <a class="btn btn-primary mx-1 my-1 px-2" href="{{ route('dishes.show', [$dish]) }}"><i class="bi bi-zoom-in"></i></a>
                            <button class="btn btn-danger bi bi-trash mx-1 my-1 px-2" data-bs-toggle="modal"
                                data-bs-target="#delete-{{ $dish->id }}"></button>
                        </td> --}}
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">Non hai ordini per il momento!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection