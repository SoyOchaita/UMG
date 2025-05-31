{{-- resources/views/nosotros/index.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Nosotros')

@section('contenido')
<div class="relative -mt-8 flex flex-col items-center min-h-screen pt-12 pb-32"
     style="background-color: {{ $info->fondo_color }};">

  {{-- Contenedor principal semitransparente --}}
  <div class="w-full max-w-5xl bg-white bg-opacity-20 backdrop-blur-md p-6 rounded-2xl border border-white/30">
    <div class="grid grid-cols-2 gap-6 items-center">

      {{-- Izquierda: imagen JPG ocupando todo el bloque --}}
      <div class="w-full h-96 rounded-2xl overflow-hidden">
        <img src="{{ asset('images/grupo-logo.jpg') }}"
             alt="Grupo Ruby"
             class="w-full h-full object-cover">
      </div>

      {{-- Derecha: texto con marco blanco --}}
      <div class="rounded-2xl border-2 border-white p-8">
        <h1 class="text-5xl font-bold mb-2 text-black">Nuestra</h1>
        <h2 class="text-3xl mb-6 text-black">Historia</h2>
        <div class="prose prose-gray text-gray-900">
          {!! nl2br(e($info->contenido)) !!}
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@section('footer')
  {{-- ATRÁS: vuelve al home --}}
  <a href="{{ route('home') }}"
     class="fixed bottom-4 left-4 px-4 py-2 border-2 border-white rounded-lg
            text-white font-medium hover:bg-white/10 transition z-50">
    ATRÁS
  </a>
@endsection
