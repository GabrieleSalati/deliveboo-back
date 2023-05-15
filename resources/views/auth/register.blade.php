@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4 row">
                                <label for="name"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-3">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <label for="email"
                                    class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <label for="password-confirm"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-3">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="p-iva"
                                    class="col-md-3 col-form-label text-md-right">{{ __('P.iva') }}</label>

                                <div class="col-md-3">
                                    <input id="p-iva" type="text"
                                        class="form-control @error('p-iva') is-invalid @enderror" name="p-iva"
                                        value="{{ old('p-iva') }}" required autocomplete="p-iva" autofocus>

                                    @error('p-iva')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <label for="restaurant-name"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Restaurant name') }}</label>

                                <div class="col-md-3">
                                    <input id="restaurant-name" type="text"
                                        class="form-control @error('restaurant-name') is-invalid @enderror"
                                        name="restaurant-name" value="{{ old('restaurant-name') }}" required
                                        autocomplete="restaurant-name" autofocus>

                                    @error('restaurant-name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="Address"
                                    class="col-md-2 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-10">
                                    <input id="Address" type="text"
                                        class="form-control @error('Address') is-invalid @enderror" name="Address"
                                        value="{{ old('Address') }}" required autocomplete="Address" autofocus>

                                    @error('Address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="my-3 row">
                                    <label for="picture"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                                    <div class="mb-3">
                                        <input class="form-control" type="file" id="picture" name="picture">
                                    </div>
                                </div>

                                <div class="mb-4 row mb-0">
                                    <div class="col-md-6 offset-md-4">
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
