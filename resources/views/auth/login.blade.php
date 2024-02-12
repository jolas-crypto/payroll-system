@extends('layouts.login')

@section('title')
    Payroll | Login
@endsection

@section('content')
    <div class="max-w-96 mx-auto mt-5">
        <div class="bg-white shadow-md rounded-md">
            <div class="p-6 bg-gray-100 border-b border-gray-200">Login</div>
            <div class="p-6">
                <form action="{{ route('login-submit') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block mb-1">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-1">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Login" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer hover:bg-blue-600">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection