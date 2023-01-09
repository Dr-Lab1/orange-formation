@extends('template')

@section('content')

    <h1>Listes des articles :</h1>

    @forelse($articles as $id=>$item)
        <p><a href="{{ route('article', ['id'=>$id]) }}">{{ $item }}</a></p>
    @empty
        <div class="alert alert-secondary" role="alert">
            Les articles ne sont pas encore disponibles
        </div>
    @endforelse

    @endsection