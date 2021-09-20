@extends('layouts.auth')

@section('content')

    <div class="px-10 md:px-0 w-full md:w-96">
        <div class="mb-12">
            <h1 class="text-2xl font-bold">Register & start analyzing!</h1>
            <p class="text-2xl font-light">With Branda your life will be easier! 👀</p>
        </div>
        <button class="flex justify-center items-center bg-black text-white py-4 px-14 w-full rounded space-x-5 my-10">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/microsoft-logo.png') }}" alt="Microsoft" width="20" height="20">
            <p>Sign in with Microsoft</p>
        </button>
        <hr class="my-10">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="space-y-10">
                <input type="text" name="first_name" placeholder="First name" class="w-full h-15 px-5 py-4 font-light outline-none rounded bg-gray-100 @error('first_name') is-invalid @enderror" required autofocus>
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="text" name="last_name" placeholder="Last name" class="w-full h-15 px-5 py-4 font-light outline-none rounded bg-gray-100 @error('last_name') is-invalid @enderror" required>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="text" name="email" placeholder="E-mail address" class="w-full h-15 px-5 py-4 font-light outline-none rounded bg-gray-100 @error('email') is-invalid @enderror" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="password" name="password" placeholder="Password" class="w-full h-15 px-5 py-4 font-light outline-none rounded bg-gray-100 @error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button
                type="submit"
                class="bg-black text-white py-3 px-14 font-medium w-full block rounded mt-10"
            >
                Sign up
            </button>
        </form>
    </div>
@endsection
