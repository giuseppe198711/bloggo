@extends('layouts.base')

@section('page-content')
<h1>Modifica il post: {{$post->title}}</h1>
{{--nel momento in cui clicco su salva mando il form alla rotta store--}}
<form action="{{route("posts.update", $post)}}" method="POST">
        @csrf
        @method("PUT")
        <div>
        <input type="text" name="title" placeholder="Inserisci il titolo" value="{{$post->title}}">
        </div>

        <div>
            <input type="text" name="slug" placeholder="Slug" value="{{$post->slug}}">
        </div>

        <div>
            <input type="text" name="author" placeholder="Inserisci l'autore" value="{{$post->author}}">
        </div>

        <div>
            <img src="{{$post->image}}" alt="">
            <input type="text" name="image" placeholder="Inserisci l'immagine" value="{{$post->image}}">
        </div>

        <div>
            <textarea name="content"  cols="30" rows="10" placeholder="Scrivi il tuo contenuto">{{$post->content}}</textarea>
        </div>

        <input type="submit" value="Salva">
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