@extends('app')

@section('title','About Us | '. config('app.name'))



@section('content')
        <img src="/images/warren.png" alt="warren">
       <p>Built with &hearts; by Jules FASSINOU</p>
       <p><a href="{{ route('home')}}"> Revenir à la page d'accueil</a></p>

@endsection
