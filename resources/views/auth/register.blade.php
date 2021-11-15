@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Register</h1>
    <form action="" class="mt-4" method="POST">
        @csrf

        <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        type="text" id="name" name="name" placeholder="Name">

        @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
                {{ $message }}
            </p>
        @enderror
        
        <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        type="email" id="email" name="email" placeholder="Email">

        @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
                {{ $message }}
            </p>
        @enderror

        <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        type="password" id="password" name="password" placeholder="Password">

        @error('password')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
                {{ $message }}
            </p>
        @enderror

        <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        type="password" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation">

        <input class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"
        type="submit" value="Send">

    </form>
</div>
@endsection