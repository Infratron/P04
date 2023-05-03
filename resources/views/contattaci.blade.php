<x-layout>
  <x-navbar />
  <x-header>
    sezione contattaci
  </x-header>
  <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form method="POST" action="{{route('Contattaci.submit')}}" class="p-5 shadow">

                @if(session('emailError'))
                <div class="alert alert-danger">
                    {{ session('emailError')}}
                </div>
                @endif

                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome e cognome</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Indirizzo e-mail</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Il tuo messaggio</label>
                    <textarea name="message" id="message" cols="30" row="7" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Contattaci</button>
    </form>
            </div>
                    </div>
                            </div>
</x-layout>