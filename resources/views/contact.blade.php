@extends('layouts.base')

@section('page-content')
<h2>CONTATTI</h2>
<h4>Se volete scrivermi qualche email seriosissima, potete scrivere alla Bloggomail: civuolecostanza@gmail.com</h4>
<h3 class="title-contact" >Oppure scrivetemi qui</h3>
{{--nel momento in cui clicco su salva mando il form alla rotta store--}}
<form class="form" action="#" method="POST">
        @csrf
        @method("PUT")
        <div>
            <h4>Il tuo nome (richiesto)</h4>
           <input type="text" name="title" placeholder="" value="">
        </div>

        <div>
            <h4>La tua email (richiesto)</h4>
            <input type="text" name="slug" placeholder="" value="">
        </div>

        <div>
            <h4>Oggetto</h4>
            <input type="text" name="author" placeholder="" value="">
        </div>

        <div>
            <h4>Il tuo messaggio</h4>
            <textarea name="content"  cols="30" rows="10" placeholder=""></textarea>
        </div>

        <input class="button-send" type="submit" value="Invia">
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