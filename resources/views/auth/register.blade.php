@extends('layouts.app')

@section('content')
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Registrati') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
							@csrf

							<div class="mb-4
                            row">
								<label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nome e Cognome') }}</label>

								<div class="col-md-3">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Inserire Nome">

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Indirizzo E-mail') }}</label>

								<div class="col-md-3">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" autocomplete="email" placeholder="Inserire E-mail">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-3">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
										name="password" value="{{ old('password') }}" placeholder="Inserire password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<label for="password-confirm"
									class="col-md-3 col-form-label text-md-right">{{ __('Conferma Password') }}</label>

								<div class="col-md-3">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation"
										value="{{ old('password-confirm') }}" autocomplete="new-password"placeholder="Confermare Password">
								</div>
							</div>

							<div class="mb-4 row">
								<label for="p_iva" class="col-md-3 col-form-label text-md-right">{{ __('P.iva') }}</label>

								<div class="col-md-3">
									<input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror" name="p_iva"
										value="{{ old('p_iva') }}" autocomplete="p_iva" autofocus placeholder="Inserire P.Iva">

									@error('p_iva')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<label for="restaurant_name"
									class="col-md-3 col-form-label text-md-right">{{ __('Nome del ristorante') }}</label>

								<div class="col-md-3">
									<input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror"
										name="restaurant_name" value="{{ old('restaurant_name') }}" autocomplete="restaurant_name" autofocus
										placeholder="Inserire nome ristorante">

									@error('restaurant_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="Address" class="col-md-2 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

								<div class="col-md-10">
									<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
										value="{{ old('Address') }}" autocomplete="address" autofocus placeholder="Inserire indirizzo">

									@error('address')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="my-3 row">
									<label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Foto ristorante') }}</label>

									<div class="mb-3">
										<input class="form-control @error('picture') is-invalid @enderror" type="file" id="picture"
											name="picture">
									</div>

									<label for="category">Categorie:</label>
									<div class="d-flex flex-row">
										@foreach ($category as $category)
											<div class="form-check ">
												<input class="form-check-input" type="checkbox" name="category" value="{{ $category->id }}">
												<label class="form-check-label" for="category{{ $category->id }}">
												{{ $category->label }}
												</label>
											</div>
										@endforeach
									</div>
									@error('picture')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="mb-4 row">
									<div class="col-md-4">
										<button type="submit" class="btn btn-primary">
											{{ __('Register') }}
										</button>
									</div>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
