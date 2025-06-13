@php use Illuminate\Support\Facades\Route; @endphp
@extends('layouts.guest')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="user">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" placeholder="Enter Email Address..." />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control form-control-user" type="password" name="password" required
                autocomplete="current-password" placeholder="Enter Password..." />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="btn btn-primary btn-user btn-block3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        <hr class="my-6">
        <a href="{{ route('auth.google.redirect') }}"
            class="btn btn-google btn-user btn-block"
            style="background:#ea4335;color:#fff;font-weight:500;">
            <i class="fab fa-google fa-fw"></i>
            Login with Google
        </a>
    </form>
@endsection

