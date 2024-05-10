@extends('layout.main')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100  pt-5 pb-5 ">
    <div class="wrapper  ">
        <h1>{{ $movie['title'] }}</h1>
        <h6>Original title: {{ $movie['original_title'] }}</h6>
        <p>Nationality: {{ $movie['nationality'] }}</p>
        <p>Date: {{ $movie['date'] }}</p>
        <p>Vote: {{ $movie['vote'] }}</p>
        <a href="{{route('home')}}" class="btn btn-primary">Home</a>

    </div>
</div>

@endsection
