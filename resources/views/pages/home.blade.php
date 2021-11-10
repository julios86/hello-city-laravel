@extends('app')

@section('title', config('app.name'))


@section('content')
    <img src="/images/benin-flag.png" alt="benin-flag">
       <h1>Hello from Quebec!</h1>
       <p> It's currently {{ date('h:i A')}}.</p>

@endsection
