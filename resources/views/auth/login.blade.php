@extends('layouts.app')

@section('title', 'Loggin')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Loggin</h1>
    <form action="" class="mt-4" method="POST">
        
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
            * Errores 
        </p>

        <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        type="email" id="email" name="email" placeholder="Email">

        <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        type="password" id="password" name="password" placeholder="Password">

        <input class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"
        type="submit" value="Send">


    </form>
</div>
@endsection