@extends('layouts.base')

@section('page-content')
    <h1>{{$post->title}}</h1>
    <img src="{{$post->image}}" alt="{{$post->title}}">
    <div><strong>Autore: </strong>{{$post->author}}</div>

    <p>
        {{$post->content}}
    </p>

    <form action="{{route("comments.store")}}" method="POST">
        @csrf
        @method("POST")

        <input type="hidden" name="author" placeholder="Inserisci l'autore">
        
        <div>
            <input type="text" name="user_id" placeholder="">
        </div>

        <div>
            <textarea name="content"  cols="30" rows="10" placeholder="Scrivi il tuo contenuto"></textarea>
        </div>

        <input type="submit" value="Salva">
    </form>
    
    <H4>Azioni: </H4>
    <ul>
       <li><a href="{{route("posts.edit", $post)}}">Modifica il tuo post</a></li>
       <li>
         <form action="{{route("posts.destroy", $post)}}" method="POST">
            @csrf
            @method("DELETE")
            <input type="submit" value="Cancella il tuo post">
        </form>
       </li>
    </ul>

    
@endsection