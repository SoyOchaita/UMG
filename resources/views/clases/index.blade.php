{{-- resources/views/clases/index.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Temas')

@section('contenido')
<div class="-mt-4 bg-[#e28947] min-h-screen py-12 px-8 flex flex-col items-center relative">

  {{-- Contenedor padre con fondo del navbar --}}
  <div class="w-full max-w-5xl bg-[#eae8db] p-6 rounded-2xl border border-white/30">
    {{-- Grid de 3×3 --}}
    <div class="grid grid-cols-3 gap-6">
      @foreach($temas as $tema)
        <a href="{{ route('clases.show', $tema->id) }}"
           class="w-full h-40 bg-white rounded-xl overflow-hidden hover:shadow-lg transition border-2 border-gray-200">
          <div class="h-full bg-[#e28947] flex items-center justify-center px-4">
            <span class="text-white text-lg font-semibold text-center">
              {!! nl2br(e(wordwrap($tema->titulo, 20, "\n"))) !!}
            </span>
          </div>
        </a>
      @endforeach
    </div>
  </div>

  {{-- Botón Salir flotante --}}
  <a href="{{ route('home') }}"
     class="fixed bottom-4 left-4 px-4 py-2 border-2 border-white rounded-lg
            text-white font-medium hover:bg-white/10 transition">
    SALIR
  </a>
</div>
@endsection
