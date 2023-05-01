<x-layout>
<x-navbar></x-navbar>
<x-header>
    Dettagli utente
  </x-header>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mt-5">
            <div class="card">
                    <img src="https://picsum.photos/250" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$utente['name']}} {{$utente['surname']}}</h5>
                        <p class="card-text">Età: {{$utente['age']}}</p>
                        <p class="card-text">Materia Preferita: {{$utente['materia']}}</p>
                        <a href="{{route('chi.siamo', ['id' => $utente['id']])}}" class="btn btn-info">Torna Indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
