@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="w-full max-w-lg border border-gray-300 bg-white p-6">
    
    @if (session('success'))
        <div class="border-l-2 border-black pl-3 mb-4 text-xs text-gray-700">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="text-xl font-bold uppercase tracking-wider mb-2">Dashboard</h1>
    <p class="text-xs text-gray-500 mb-6 border-b border-gray-200 pb-2">Protected Area</p>

    <div class="border border-gray-200 p-4 mb-6 text-xs space-y-2 bg-gray-50">
        <div><span class="font-bold">USER:</span> {{ auth()->user()->name }}</div>
        <div><span class="font-bold">EMAIL:</span> {{ auth()->user()->email }}</div>
        <div><span class="font-bold">STATUS:</span> Authenticated</div>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="border border-black px-4 py-2 text-xs font-bold hover:bg-black hover:text-white transition">
            LOGOUT
        </button>
    </form>
</div>
@endsection