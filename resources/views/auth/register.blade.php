@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="w-full max-w-sm border border-gray-300 bg-white p-6">
    <h1 class="text-lg font-bold uppercase tracking-wider mb-4 border-b border-gray-200 pb-2">Register</h1>

    @if ($errors->any())
        <div class="border-l-2 border-red-600 pl-3 mb-4 text-xs text-red-600 space-y-1">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="space-y-3 text-xs">
        @csrf

        <div>
            <label for="name" class="block font-semibold mb-1">NAME</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
                class="w-full border border-gray-300 p-2 focus:outline-none focus:border-black"
            >
        </div>

        <div>
            <label for="email" class="block font-semibold mb-1">EMAIL</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                class="w-full border border-gray-300 p-2 focus:outline-none focus:border-black"
            >
        </div>

        <div>
            <label for="password" class="block font-semibold mb-1">PASSWORD</label>
            <input
                type="password"
                id="password"
                name="password"
                required
                class="w-full border border-gray-300 p-2 focus:outline-none focus:border-black"
            >
        </div>

        <div>
            <label for="password_confirmation" class="block font-semibold mb-1">CONFIRM PASSWORD</label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                required
                class="w-full border border-gray-300 p-2 focus:outline-none focus:border-black"
            >
        </div>

        <button type="submit" class="w-full bg-black text-white py-2 font-bold hover:bg-gray-800 transition">
            SUBMIT
        </button>
    </form>

    <div class="mt-4 pt-3 border-t border-gray-100 text-xs text-center">
        <span>Have an account?</span>
        <a href="{{ route('login') }}" class="underline font-bold ml-1">Login</a>
    </div>
</div>
@endsection