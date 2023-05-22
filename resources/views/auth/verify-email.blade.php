@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Controlla il tuo indirizzo mail!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Ti abbiamo mandato una mail!') }}
                    </div>
                    @endif

                    {{ __('Prima di procedere, controlla il link di verifica mail.') }}
                    {{ __('Se non hai ricevuto la E-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('E-mail non ricevuta?') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
