@extends('layouts.app')
@section('title', 'Movies page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($movies as $movie)
                    <div class="card  shadow ">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie['title'] }}</h4>
                            <h6 class="card-text">{{ $movie['original_title'] }}</h6>
                            <p>{{ $movie['nationality'] }}</p>
                            <p>{{$movie['date']}}</p>
                            <span>Vote:{{$movie['vote']}}</span>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

</html>
