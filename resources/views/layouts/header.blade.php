<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Plantilla</title>
  <!-- Enlaza la hoja de estilos de Tailwind CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
  <header class="bg-white py-4">
    <div class="container mx-auto px-4">
      <!-- Contenedor del header -->
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <img class="w-16" src="https://ia802602.us.archive.org/8/items/mi-logo_202306/mi%20logo.png" alt="">
        <!-- Buscador -->
        
        
      </div>
      <div class="w-full text-center relative bottom-5">
        <p class="font-black text-3xl	">AJ Comerce Libre</p>
      </div>
      <!-- Menú de navegación -->
      <nav class="flex justify-center mt-4">
        <a href="#" class="mr-4">Categorías</a>
        <a href="#" class="mr-4">Quiénes somos</a>
        <a href="#" class="mr-4">Contáctanos</a>
      </nav>
    </div>
  </header>


  <!-- Incluye los scripts de Tailwind CSS y cualquier otro script que necesites -->
  <script src="{{ asset('js/app.js') }}"></script>
  
</body>
</html>
