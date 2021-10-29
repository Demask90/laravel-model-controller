@extends('layouts.app')

@section('titolo',$movie[0]['title'])

@section('content') 
    <h1>{{$movie[0]['title']}}</h1>
    <a class="card-movie">
        <div class="titleMovie">Titolo:{{$movie[0]['title']}}</div>
        <div class="nationalityMovie">Nazionalità: {{$movie[0]['nationality']}}</div>
        <div class="dateMovie">Data di uscita: {{$movie[0]['date']}}</div>
        <div class="ratingMovie">Voto: {{$movie[0]['vote']}}</div>
    </a>
@endsection