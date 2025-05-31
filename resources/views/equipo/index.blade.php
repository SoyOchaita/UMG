{{-- resources/views/equipo/index.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Equipo')

@section('contenido')
<div class="relative flex flex-col items-center min-h-screen pt-16 pb-20"
     style="background-color: {{ $color }};">

  {{-- Cabecera --}}
  <h1 class="text-4xl font-extrabold text-white mb-12">Nuestro Equipo</h1>

  {{-- Cuatro contenedores responsivos --}}
  <div class="w-full max-w-6xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
    @foreach($equipo as $miembro)
      <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col">
        {{-- Imagen más alta --}}
        <img src="{{ asset($miembro->foto_path) }}"
             alt="{{ $miembro->nombre }}"
             class="w-full h-56 object-cover">

        {{-- Nombre o rol --}}
        <div class="p-4 flex-1 flex items-center justify-center">
          <span class="text-lg font-medium text-gray-800">{{ $miembro->rol }}</span>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection

@section('footer')
  <a href="{{ route('home') }}"
     class="fixed bottom-4 left-4 px-4 py-2 bg-white bg-opacity-30 text-gray-900 font-medium rounded-lg shadow-lg
            hover:bg-opacity-50 transition z-50">
    ATRÁS
  </a>
@endsection
