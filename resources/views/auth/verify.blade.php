@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um Email de verificação foi enviado para sua caixa de entrada.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifique sua caixa de entrada.') }}
                    {{ __('Não recebeu o email de verificação?') }}, <a href="{{ route('verification.resend') }}">{{ __('Clique aqui para enviar novamente.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
