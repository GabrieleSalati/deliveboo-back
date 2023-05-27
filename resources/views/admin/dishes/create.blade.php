@extends('layouts.app')
@section('title', 'Nuovo piatto')

@section('content')
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Aggiungi piatto') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('dishes.store') }}" enctype="multipart/form-data">
							@csrf

							<div class="mb-4 row">
								<label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nome') }}</label>

								<div class="col-md-3">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" autocomplete="name" autofocus required>

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Descrizione') }}</label>

								<div class="col-md-9">
									<textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
									 rows="3" required>{{ old('description') }}</textarea>

									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-1 row">
								<label for="price" class="col-md-3 col-form-label text-md-right">{{ __('Prezzo') }}</label>

								<div class="col-md-3">
									<input id="price" type="number" step="0.01" class="form-control  @error('price') is-invalid @enderror"
										name="price" autocomplete="new-price" value="{{ old('price') }}" required>

									@error('price')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="my-3 row">
									<label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

									<div class="mb-3">
										<input class="form-control" type="file" id="picture" name="picture">
									</div>
								</div>

								<div class="mb-4 row">
									<label for="visible" class="col-md-4 col-form-label text-md-right">{{ __('Visibilita\'') }}</label>
									<select id="visible" name="visible" class="form-select ms-2" aria-label="Default select example">
										<option selected value="0">No</option>
										<option value="1">Si</option>
									</select>
								</div>

								<div class="row ">
									<div class="col d-flex justify-content-center">
										<button type="submit" class="btn btn-primary">
											{{ __('Crea piatto') }}
										</button>
									</div>
								</div>
						</form>
					</div>
				</div>
			</div>
			<div class="my-5">
				<a class="btn btn-primary mx-1 py-1 px-2" href="{{ route('dishes.index') }}"><i class="bi bi-arrow-left"></i></a>
			</div>
		</div>
	</div>
@endsection
