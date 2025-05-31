{{-- resources/views/contacto/index.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
<div class="relative -mt-8 min-h-screen flex items-center justify-center"
     style="background-color: {{ $info->fondo_color }};">

  {{-- Tarjeta principal --}}
  <div class="w-full max-w-3xl bg-white bg-opacity-30 backdrop-blur-md rounded-3xl shadow-xl p-8">
    <h1 class="text-4xl font-extrabold text-gray-800 text-center mb-6">Contáctanos</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      {{-- Email --}}
      <div class="flex items-start space-x-4">
        <div class="mt-1">
          {{-- Icono de correo --}}
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 12l-4-4m0 0l-4 4m4-4v12" />
          </svg>
        </div>
        <div>
          <h2 class="text-xl font-semibold text-gray-700">Email</h2>
          <p class="mt-1 text-gray-900 break-words">{{ $info->email }}</p>
        </div>
      </div>

      {{-- Teléfono --}}
      <div class="flex items-start space-x-4">
        <div class="mt-1">
          {{-- Icono de teléfono --}}
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5h2l2 7-2 2v5h5l2-2 7 2v-2l-2-2 2-7h-2l-2 7-2 2h-5l2-2-2-7z" />
          </svg>
        </div>
        <div>
          <h2 class="text-xl font-semibold text-gray-700">Teléfono</h2>
          <p class="mt-1 text-gray-900">{{ $info->telefono }}</p>
        </div>
      </div>

      {{-- Horario --}}
      <div class="flex items-start space-x-4 md:col-span-2">
        <div class="mt-1">
          {{-- Icono de reloj --}}
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m3-10a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <div>
          <h2 class="text-xl font-semibold text-gray-700">Horario</h2>
          <p class="mt-1 whitespace-pre-line text-gray-900">{{ $info->horario }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
  <a href="{{ route('home') }}"
     class="fixed bottom-4 left-4 px-4 py-2 bg-indigo-600 text-white font-medium rounded-lg shadow-lg
            hover:bg-indigo-700 transition z-50">
    ATRÁS
  </a>
@endsection
