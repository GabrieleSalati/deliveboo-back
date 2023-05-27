@extends('layouts.app')
@section('title', 'Registrazione')

@section('content')
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Registrati') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" onsubmit="return validateForm()">
							@csrf

							<div class="mb-4 row">
								<label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nome e Cognome') }}</label>

								<div class="col-md-3">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Inserire Nome" required>

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Indirizzo E-mail') }}</label>

								<div class="col-md-3">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" autocomplete="email" placeholder="Inserire E-mail" required
										pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Inserisci una mail in formato valido">

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
										name="password" value="{{ old('password') }}" placeholder="Inserire password" required>

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
										value="{{ old('password-confirm') }}" autocomplete="new-password"placeholder="Confermare Password" required>
								</div>
							</div>

							<div class="mb-4 row">
								<label for="p_iva" class="col-md-3 col-form-label text-md-right">{{ __('P.iva') }}</label>

								<div class="col-md-3">
									<input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror" name="p_iva"
										value="{{ old('p_iva') }}" autocomplete="p_iva" autofocus placeholder="Inserire P.Iva" required
										pattern="[0-9]{11}" title="Inserisci 11 cifre">

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
										placeholder="Nome ristorante" required>

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
										value="{{ old('address') }}" autocomplete="address" autofocus title="Inserire Via , n° civico(Via Rossi, 11)"
										placeholder="Inserire indirizzo" pattern="^[a-zA-Z]+\s[a-zA-Z]+,\s\d+$" required>

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
											title="Inserisci un' immagine in formato: jpg,jpeg,png" name="picture">
									</div>

									@error('picture')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="row d-flex justify-content-between">
								<label class="col-md-2 col-form-label text-md-right">Categorie:</label>
								<div class="col-md-10 d-flex flex-wrap">
									@foreach ($categories as $category)
										<div class="form-check col-md-4 ms-4 p-1 rounded">
											<label class="form-check-label @error('categories') text-danger @enderror"
												for="category-{{ $category->id }}">{{ $category->label }}</label>

											<input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox"
												name="categories[]" id="category-{{ $category->id }}" value="{{ $category->id }}">
										</div>
									@endforeach
								</div>
								<p id="error-message" class="col-md-10 offset-md-2 text-danger"></p>
								@error('categories')
									<div class="col-md-10 offset-md-2 invalid-feedback">
										<strong>{{ $message }}</strong>
									</div>
								@enderror
							</div>

							<div class="mt-4 row">
								<div class="col-md-4 d-flex justify-content-center">
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

	{{-- funzione che controlla che almeno una checkbox sia checked, in caso contrario mostra un messaggio di errore e blocca l'invio del form --}}
	<script>
		function validateForm() {
			const checkboxes = document.getElementsByName('categories[]');
			let checked = false;

			for (var i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i].checked) {
					checked = true;
					break;
				}
			}
			var errorMessageElement = document.getElementById('error-message');
			if (!checked) {
				errorMessageElement.textContent = "Seleziona almeno una checkbox.";
				return false; // Blocca l'invio del form
			} else {
				errorMessageElement.textContent = ""; // Resetta il messaggio di errore
			}

			return true; // Permetti l'invio del form
		}
	</script>
@endsection
