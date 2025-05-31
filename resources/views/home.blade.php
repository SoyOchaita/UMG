{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
<div class="bg-[#c3003b] min-h-screen flex flex-col">
  {{-- Franja roja bajo el navbar --}}
  <div class="w-full bg-[#a2002e]" style="height:4rem;"></div>

  {{-- Carrusel --}}
  <div class="py-8 flex-1">
    <div class="swiper w-full h-96">
      <div class="swiper-wrapper">
        @foreach($clases as $clase)
          <div class="swiper-slide">
            <img
              src="{{ asset('images/' . $clase->image_path) }}"
              alt="{{ $clase->title }}"
              class="w-full h-full object-cover"
            >
          </div>
        @endforeach
      </div>
      {{-- Paginación --}}
      <div class="swiper-pagination"></div>
      {{-- Flechas --}}
      <div class="swiper-button-prev text-white"></div>
      <div class="swiper-button-next text-white"></div>
    </div>
  </div>
</div>
@endsection
