@extends('layouts.app')

@section('title','movies')

@section('content') 
    <h1>i nostri Movies:</h1>
    <div class="container">
        <div class="list-movies">

            @foreach ($movies as $movie)
            {{-- fa riferimento alla pagina dettaglio con id = index --}}
                <a href="{{route('pagina-movie', ['id' => $movie['id']])}}">
                    <div class="card-movie">
                        {{-- <img src="{{$movie}}" alt=""> --}}
                        <div>{{$movie['title']}}</div>
                        <div>{{$movie['nationality']}}</div>
                        <div>{{$movie['date']}}</div>
                        <div>{{$movie['vote']}}</div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
@endsection