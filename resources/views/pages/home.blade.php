@extends('app')

@section('title', config('app.name'))


@section('content')
    <img src="{{ asset('images/benin-flag.png')}}" alt="benin-flag" class="mt-12 rounded shadow-md h-32">
       <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Benin!</h1>
       <p class="mt-2 text-lg text-gray-800"> It's currently {{ date('h:i A')}}.</p>

@endsection
