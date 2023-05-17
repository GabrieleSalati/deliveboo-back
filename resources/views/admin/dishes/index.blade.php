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
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($dishes as $dish)
					<tr>
						<th scope="row">{{ $dish->id }}</th>
						<td>{{ $dish->name }}</td>
						<td>{{ $dish->description }}</td>
						<td>€ {{ $dish->price }}</td>
						<td> {{ $dish->visible ? 'Visibile' : 'Non Visibile' }}</td>
						<td class="action-cell">
							<a class="btn btn-primary mx-1 py-1 px-2" href="{{ route('dishes.edit', [$dish]) }}"><i
									class="bi bi-wrench-adjustable"></i></a>
									<a class="btn btn-primary mx-1 py-1 px-2" href="{{ route('dishes.show', [$dish]) }}"><i class="bi bi-zoom-in"></i></a>

							<button class="btn btn-danger bi bi-trash mx-1 py-1 px-2" data-bs-toggle="modal"
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
		<div id="buttons" class="mt-5">
			<a href="{{ url('/home') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
		</div>
		
		
		@section('modals')
			@foreach ($dishes as $dish)
				<div class="modal fade" id="delete-{{ $dish->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">{{ $dish->name }}</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								Vuoi davvero eliminare questo piatto?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
								<form action="{{ route('dishes.destroy', $dish) }}" method="POST">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-primary">Conferma</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@endsection
	</div>
@endsection
