@extends('layout.main')

@section('content')

<div class="container d-flex flex-wrap pt-5 pb-5  ">
    @foreach ($movies as $movie )
    <div class="card m-2 " style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $movie['title'] }}</h5>
          <h6 class="card-title">Original title: {{ $movie['original_title'] }}</h6>
          <p class="card-text">Nationality: {{ $movie['nationality'] }}</p>
          <p class="card-text">Date: {{ $movie['date'] }}</p>
          <p class="card-text">Vote: {{ $movie['vote'] }}</p>
          <a href="{{route('movie-details', ['id' => $movie->id])}}" class="btn btn-primary">Details</a>
        </div>
    </div>

    @endforeach
</div>

@endsection
