@extends('template')

@section('content')

    <div class="container">
        <div class="mt-3 bg-light py+3 px-3">
            <h1>{{ $article->title }}</h1>
            <hr>
            <h5>{{ $article->slug }}</h5>
            <p>{!! nl2br($article->content) !!}</p>
        </div>
    </div>

@endsection