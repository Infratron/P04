<x-layout>
  <x-navbar />
  <x-header>
    Benvenuti sul sito
    @if (session('emailSent'))
    <div class="alert alert-success text-center">
      {{ session('status')}}
    </div>
    @endif
  </x-header>
</x-layout>