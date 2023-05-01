<x-layout>
<x-navbar>
</x-navbar>
<x-header>
    Chi siamo
  </x-header>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            @foreach($users as $utente)
            <!-- card -->
            <x-card 
                id="{{ $utente['id'] }}"
                name="{{ $utente['name'] }}"
                surname="{{ $utente['surname'] }}"
                age="{{ $utente['age'] }}"
            />
            @endforeach
        </div>
    </div>
</x-layout>