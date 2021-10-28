@extends('layouts.app')

@section('title',$movie[0]['original_title'])

@section('content') 
    @dump($movie)
@endsection