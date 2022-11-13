@extends('layouts.base')

@section('title', 'главная')

@section('content')

    <video controls width="400" height="300">
        <source src="https://youtu.be/ih6NRgaIvSA" type="video">
    </video>

    @if(count($bbs) > 0)
        <table class="table table-striped">
            @foreach($bbs as $bb)
                <tr>
                    <td><h3>{{$bb->title}}</h3></td>
                    <td>{{ $bb->price}}</td>
                    <td>
                        <a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее...</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection

