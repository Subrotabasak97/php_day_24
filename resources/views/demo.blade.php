@extends('master')

@section('title')
    BITM Page
@endsection

@section('body')
    <h1>{{ $a }}</h1>
    <h1>{{ $b }}</h1>
    @foreach($c as $key => $value)
        @foreach($value as $item)
            <span>{{$item}}</span>
        @endforeach
        <br/>
    @endforeach

    {{$email}}

@endsection

