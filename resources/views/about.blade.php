@extends('layouts.base')

@section('page-content')
<h2>QUESTA SONO IO</h2>

<p>“Signora, sua figlia Costanza è brava, ma scherza troppo.
    Non sta mai zitta. E scrive sempre.”
    “Cosa vuole che le dica. Farà la scrittrice da grande. O la comica.”
    
    Se quel giorno, al colloquio con il mio professore di italiano, madre avesse parlato anche delle battute, dei viaggi e dei fidanzati tremendi, probabilmente avrebbe creato Il Bloggo Esistenziale.
    Ma quella è un’altra storia.
    
    Nata a Verona, cresciuta tra Bologna e Verona, mi sono destreggiata tra lavori, pinte e fidanzati tremendi nella gelida Albione per 3+ anni.
    Dopo aver passato 3 anni a Londra; 9 mesi nella patria dei kilt, del Mars fritto e di Trainspotting ovvero la Scozia; mi ritrovo ora dall’altra parte dell’emisfero. Infradito, canguri e animali pericolosi saranno i miei nuovi amici, l’Australia il nuovo paese delle mie avventure.
    
    Nella vita ho fatto molte cose, tra le quali ricordiamo studiare Agraria senza successo, vendere corsi di inglese senza molto successo, la pub manager, la social media strategist.
    Tra tutte queste cose, quella che mi viene meglio pare sia scrivere. Allora scrivo.</p>

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