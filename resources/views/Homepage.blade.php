<x-layout>
  <x-navbar />
  <x-header>
    Benvenuti sul sito
    @if (session('emailSent'))
    <div class="alert alert-success text-center">
      {{ session('status')}}
      <p>hai correttamente inviato la mail<p>
    </div>
    @endif
  </x-header>
</x-layout>