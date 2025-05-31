@extends('layouts.app')

@section('titulo', $ejercicio->titulo)

@section('contenido')
<div class="relative -mt-8 bg-[#f23005] min-h-screen pt-12 flex flex-col items-center pb-32">

  {{-- Panel de contenido --}}
  <div class="w-full max-w-4xl bg-white bg-opacity-20 backdrop-blur-md p-6 rounded-2xl border border-white/30 text-gray-900">
    {{-- Título --}}
    <h1 class="text-3xl font-bold mb-4 text-center">{{ $ejercicio->titulo }}</h1>

    {{-- Descripción --}}
    <div class="prose prose-gray mx-auto">
      {!! nl2br(e($ejercicio->descripcion)) !!}
    </div>
  </div>

</div>
@endsection

@section('footer')
  {{-- ATRÁS (vuelve al listado de ejercicios) --}}
  <a href="{{ route('ejercicios.index') }}"
     class="fixed bottom-4 left-4 px-4 py-2 border-2 border-white rounded-lg
            text-white font-medium hover:bg-white/10 transition z-50">
    ATRÁS
  </a>

  {{-- TEMAS (lleva al tema con el mismo ID) --}}
  <a href="{{ route('clases.show', $ejercicio->id) }}"
     class="fixed bottom-4 left-1/2 transform -translate-x-1/2
            px-4 py-2 border-2 border-white rounded-lg
            text-white font-medium hover:bg-white/10 transition z-50">
    TEMAS
  </a>

  {{-- SIGUIENTE (sigue al próximo ejercicio) --}}
  @if($nextId)
    <a href="{{ route('ejercicios.show', $nextId) }}"
       class="fixed bottom-4 right-4 px-4 py-2 border-2 border-white rounded-lg
              text-white font-medium hover:bg-white/10 transition z-50">
      SIGUIENTE
    </a>
  @else
    <div class="fixed bottom-4 right-4 px-4 py-2 border-2 border-white rounded-lg
                text-white font-medium opacity-50 cursor-not-allowed z-50">
      SIGUIENTE
    </div>
  @endif
@endsection
