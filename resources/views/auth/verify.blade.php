@extends('layouts.guest')

@section('title', 'Verificar E-mail')

@section('content')
<div class="card">
    <div class="card-header text-center">{{ __('Verify Your Email Address') }}</div>

    <div class="card-body p-4">
        @if (session('resent'))
            <div class="alert alert-success small mb-4" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        <div class="mb-4 small text-secondary">
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
        </div>

        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">{{ __('click here to request another') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
