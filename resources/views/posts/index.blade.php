@extends('layouts.base')


@section('page-content')
    <section class="container">

        <div class="logo">
            <H1>Il <span>Bloggo</span> Esistenziale</H1>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter"></i>
            <aside>
                <form action="#">
                    <input type="search" placeholder="Cerca...">
                </form>
            </aside>
        </div>


        <header>
            <nav class="main-nav">
              <div class="nav-right">
                <ul class="list">
                  <li class="open-menu">
                    <a href="#"></a>IL BLOGGO ESISTENZIALE
                  </li>
        
                  <li class="open-menu">
                    <a href="#"></a>QUESTA SONO IO
                  </li>
        
                  <li class="open-menu">
                    <a href="#"></a>CONTATTI
                  </li>
                </ul>
              </div>
            </nav>
          </header>

        
        <h2>IL BLOGGO ESISTENZIALE</h2>

        <ul class="ciao">
            @foreach ($posts as $key => $post)
            <div class="container"> 
                <li class="@if($key == count($posts) -1 || $key == count($posts) -2)big @endif">
                
                    <h3 class="title-post">{{$post->title}}</h3>
                    <img class="img-post" src="{{$post->image}}" alt="{{$post->title}}">
                    <p class="content">{{substr($post->content, 0, 500)}}</p>
                    <a class="continue" href="{{route("posts.show", $post)}}">...CONTINUA A LEGGERE</a>
                    
                </li>
            </div>
           
            @endforeach
        </ul>
    </section>
    

   
@endsection


    