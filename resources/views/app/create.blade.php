@extends('template')

@section('content')

<div class="container">
    <h1 class="mb-4">Nouvel article</h1>

    <div>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="tile">Titre :</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="slug">Slug :</label>
                </div>
                <div class="col-md-9">
                    <textarea name="slug" id="slug" maxlength="255" cols="30" rows="2" class="form-control"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="content">Contenu :</label>
                </div>
                <div class="col-md-9">
                    <textarea name="content" id="content" cols="30" rows="3" class="form-control"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-9">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection