{{-- resources/views/ejercicios/index.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Ejercicios')

@section('contenido')
<div class="-mt-4 bg-[#ffd867] min-h-screen py-12 px-8 flex flex-col items-center relative">

  {{-- Contenedor padre --}}
  <div class="w-full max-w-5xl bg-[#eae8db] p-6 rounded-2xl border border-white/30">
    <h2 class="text-gray-800 text-2xl font-semibold mb-4 text-center">Selecciona un ejercicio</h2>

    {{-- Grid 3×3 --}}
    <div class="grid grid-cols-3 gap-6">
      @foreach($ejercicios as $ejercicio)
        <a href="{{ route('ejercicios.show', $ejercicio->id) }}"
           class="w-full h-40 bg-white rounded-xl overflow-hidden hover:shadow-lg transition border-2 border-gray-200">
          <div class="h-full bg-[#ffd867] flex items-center justify-center px-4">
            <span class="text-gray-800 text-lg font-semibold text-center">
              {{-- Ajustamos el título a 20 caracteres por línea --}}
              {!! nl2br(e(wordwrap($ejercicio->titulo, 20, "\n"))) !!}
            </span>
          </div>
        </a>
      @endforeach
    </div>
  </div>

  {{-- Botón Salir siempre al home --}}
  <a href="{{ route('home') }}"
     class="fixed bottom-4 left-4 px-4 py-2 border-2 border-white rounded-lg
            text-white font-medium hover:bg-white/10 transition z-50">
    SALIR
  </a>
</div>
@endsection
