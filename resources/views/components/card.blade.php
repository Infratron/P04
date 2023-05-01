<div class="col-12 col-md-6 col-lg-3 mt-5">
            <div class="card">
                    <img src="https://picsum.photos/250" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$name}} {{$surname}}</h5>
                        <p class="card-text">Età: {{$age}}</p>
                        <a href="{{route('dettaglio-utente', ['id' => $id])}}" class="btn btn-info">Scopri di più</a>
                    </div>
                </div>
            </div>