@extends('layouts.login')

@section('title')
    Payroll | Registration
@endsection

@section('content')
    <div class="max-w-96 mx-auto mt-5">
        <div class="max-w-lg">
            <div class="bg-white shadow-md rounded-md">
                <div class="p-6 bg-gray-100 border-b border-gray-200">Register</div>
                <div class="p-6">
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block mb-1">Name</label>
                            <input type="text" id="name" name="name" value="" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-1">Email Address</label>
                            <input type="email" id="email" name="email" value="" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block mb-1">Password</label>
                            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block mb-1">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="flex justify-center">
                            <input type="submit" value="Register" class="px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer hover:bg-blue-600">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection