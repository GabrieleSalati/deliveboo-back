@extends('layouts.app')

@section('content')
	<div class="container">
		<div id="buttons" class="mt-5">
			<a href="{{ route('dishes.create') }}" type="button" class="btn btn-primary">Aggiungi Piatto</a>
		</div>

		<table class="table table-striped mt-2">
			<thead>
				<tr>
					<th scope="col">ID Piatto</th>
					<th scope="col">Nome Piatto</th>
					<th scope="col">Descrizione</th>
					<th scope="col">Prezzo</th>
					<th scope="col">Visibile</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($dishes as $dish)
					<tr>
						<th scope="row">{{ $dish->id }}</th>
						<td>{{ $dish->name }}</td>
						<td>{{ $dish->description }}</td>
						<td>{{ $dish->price }}€</td>
						<td>{{ $dish->visible }}</td>
						<td class="action-cell"><a href="{{ route('dishes.edit', [$dish]) }}"><i class="bi bi-wrench-adjustable"></i></a>
						</td>
					</tr>
				@empty
					<tr>
						<td class="text-center" colspan="5">Devi ancora aggiungere un piatto!</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
@endsection
