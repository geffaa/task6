@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg px-8 py-8 pt-8">
            <h1 class="text-2xl font-bold text-center mb-4">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-green-900 text-white px-4 py-2 rounded-lg hover:bg-green-700">Login</button>
                </div>
                <div class="text-center">
                    <p class="text-sm">Don't have an account? <a href="{{ route('signup') }}" class="text-green-900 font-bold">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
