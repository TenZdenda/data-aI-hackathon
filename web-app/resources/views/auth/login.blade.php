@extends('layouts.auth')

@section('content')

<div class="px-10 md:px-0 w-full md:w-96">
    <div class="mb-12">
        <h1 class="text-2xl font-bold">Hi, welcome to Branda.</h1>
        <p class="text-2xl font-light">Sign in and do some magic 🧙</p>
    </div>
    <button class="flex justify-center items-center bg-black text-white py-4 px-14 w-full rounded space-x-5 my-10">
        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/microsoft-logo.png') }}" alt="Microsoft" width="20" height="20">
        <p>Sign in with Microsoft</p>
    </button>
    <hr class="my-10">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="space-y-10">
            <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail address" class="w-full h-15 px-5 font-light py-4 outline-none rounded bg-gray-100 @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" name="password" placeholder="Password" class="w-full h-15 px-5 py-4 font-light outline-none rounded bg-gray-100 @error('email') is-invalid @enderror" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button
            type="submit"
            class="bg-black text-white py-4 px-14 font-medium w-full block rounded mt-10"
        >
            Sign in
        </button>
        <a class="text-center font-medium block mt-5 text-black transition duration-300" href="/forgot">
            <div class="flex space-x-4 justify-center">
                <p>Forgot your password?</p>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 12H3M17 8L21 12L17 8ZM21 12L17 16L21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
    </form>
</div>
@endsection
