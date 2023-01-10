@extends('template')

@section('content')

    <h1>Listes des articles :</h1>

    <div class="container">
        @forelse($articles as $cptr => $item)

        <div class="mt-3 bg-light py+3 px-3">
            <h3>{{ $item->title }}</h3>
            <p>{{ $item->content }}</p>
            <p style="text-align: left; color: gray">{{ $item->created_at }}</p>
            <p><a href="{{ route('article', ['id'=>$item->id]) }}" class="btn btn-primary">Voir plus</a></p>

        </div>

        @empty
            <div class="alert alert-secondary" role="alert">
                Les articles ne sont pas encore disponibles
            </div>
        @endforelse
    </div>

    


    @endsection