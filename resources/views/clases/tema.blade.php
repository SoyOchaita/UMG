@extends('layouts.app')

@section('titulo', $tema['titulo'])

@section('contenido')
  <div class="max-w-3xl mx-auto px-4 py-8 bg-white rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-4">{{ $tema['titulo'] }}</h1>
    <p class="text-gray-800 leading-relaxed">{{ $tema['texto'] }}</p>
    <a href="{{ route('clases.show', $clase->id) }}"
       class="inline-block mt-6 text-blue-600 hover:underline">
      ← Volver a {{ $clase->title }}
    </a>
  </div>
@endsection
s