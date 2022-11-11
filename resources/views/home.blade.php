@extends('layouts.base')

@section('title', 'Мои объявления')

@section('content')

    <p class="text-right"><a href="{{ route('add_advt') }}">Добавить объявление</a></p>
    @if (count($bbs) > 0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th colspan="2">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($bbs as $bb)
                <tr>
                    <td><h3>{{ $bb->title }}</h3></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="">Изменить</a>
                    </td>
                    <td>
                        <a href="">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    {{ __('You are logged in!') }}--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
