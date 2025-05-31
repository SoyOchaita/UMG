{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>@yield('titulo','Inicio') – UniCursos</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-[#eae8db]">

  {{-- NAVBAR --}}
  <nav class="fixed top-0 left-0 z-30 w-full bg-[#eae8db]">
    <div class="max-w-4xl mx-auto grid grid-cols-7 items-center h-20 px-4">
      <a href="{{ route('home') }}"          class="col-span-1 text-gray-800 font-medium text-center px-3 py-2 rounded-md hover:bg-[#d1cdb9]">Menú</a>
      <a href="{{ route('clases.index') }}" class="col-span-1 text-gray-800 font-medium text-center px-3 py-2 rounded-md hover:bg-[#d1cdb9]">Temas</a>
      <a href="{{ route('ejercicios.index') }}" class="col-span-1 text-gray-800 font-medium text-center px-3 py-2 rounded-md hover:bg-[#d1cdb9]">Ejercicios</a>
      <div class="col-span-1 flex items-center justify-center">
        <a href="{{ route('home') }}"><img src="{{ asset('icons/icono.svg') }}" alt="Icono" class="w-8 h-8"></a>
      </div>
      <a href="{{ route('nosotros') }}" class="col-span-1 text-gray-800 font-medium text-center px-3 py-2 rounded-md hover:bg-[#d1cdb9]">Nosotros</a>
      <a href="{{ route('contacto') }}" class="col-span-1 text-gray-800 font-medium text-center px-3 py-2 rounded-md hover:bg-[#d1cdb9]">Contacto</a>
      <a href="{{ route('equipo') }}" class="col-span-1 text-gray-800 font-medium text-center px-3 py-2 rounded-md hover:bg-[#d1cdb9]">Equipo</a>
    </div>
  </nav>

  {{-- leave space for the fixed navbar (h-20 = 5rem) --}}
  <main class="min-h-screen pt-20">
    @yield('contenido')
  </main>

  {{-- render footer section if defined --}}
  @hasSection('footer')
    @yield('footer')
  @endif

</body>
</html>
