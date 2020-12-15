@extends('layouts.base')

@section('page-content')
    <h3 class="title-create">Aggiungi un nuovo post sul Bloggo</h3>
{{--nel momento in cui clicco su salva mando il form alla rotta store--}}
<form class="form-post" action="{{route("posts.store")}}" method="POST">
        @csrf
        @method("POST")
        <div>
            <input type="text" name="title" placeholder="Titolo">
        </div>

        <div>
            <input type="text" name="slug" placeholder="Slug">
        </div>

        <div>
            <input type="text" name="author" placeholder="Autore">
        </div>

        <div>
            <input type="text" name="image" placeholder="Immagine">
        </div>

        <div>
            <textarea name="content"  cols="30" rows="10" placeholder="Scrivi il tuo contenuto"></textarea>
        </div>

        <input class="button-save" type="submit" value="Salva">
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection