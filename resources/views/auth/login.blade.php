@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="w-full max-w-sm border border-gray-300 bg-white p-6">
    <h1 class="text-lg font-bold uppercase tracking-wider mb-4 border-b border-gray-200 pb-2">Login</h1>

    @if (session('success'))
        <div class="border-l-2 border-black pl-3 mb-4 text-xs text-gray-700">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="border-l-2 border-red-600 pl-3 mb-4 text-xs text-red-600">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="border-l-2 border-red-600 pl-3 mb-4 text-xs text-red-600 space-y-1">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-3 text-xs">
        @csrf

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

        <button type="submit" class="w-full bg-black text-white py-2 font-bold hover:bg-gray-800 transition">
            LOGIN
        </button>
    </form>

    <div class="mt-4 pt-3 border-t border-gray-100 text-xs text-center">
        <span>Don't have an account?</span>
        <a href="{{ route('register') }}" class="underline font-bold ml-1">Register</a>
    </div>
</div>
@endsection