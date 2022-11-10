@extends('layouts.base')

@section('title', 'Детальная')

@section('main')

    <h1>Объявление</h1>
    <h2>{{$bb->title}}</h2>
    <h2>{{$bb->content}}</h2>
    <h2>{{$bb->price}}</h2>
    <p><a href="{{ route('index') }}">На перечень объявлений.</a></p>

@endsection
