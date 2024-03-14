<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Agregar Usuario</title>
</head>
<body>

<!-- Inicio navegación superior -->
<header class="bg-black">
    <div class="container mx-auto flex items-center justify-between px-4 py-2 text-white">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-60">
        
        <div class="flex space-x-4 text-white text-lg">
            <a href="{{ url('/main') }}" class="hover:text-gray-400">Inicio</a>
            <a href="{{ url('/admin/users') }}" class="hover:text-gray-400">Usuarios</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="hover:text-gray-400">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</header>
<!-- Fin navegación superior -->

<!-- Inicio formulario para agregar usuario -->
<div class="container mx-auto px-4 mt-8">
    <h2 class="text-xl font-semibold">Agregar Nuevo Usuario</h2>
    
    <!-- Formulario para agregar usuario -->
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold">Nombre:</label>
            <input type="text" name="name" id="name" class="border border-gray-400 px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold">Email:</label>
            <input type="email" name="email" id="email" class="border border-gray-400 px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-semibold">Contraseña:</label>
            <input type="password" name="password" id="password" class="border border-gray-400 px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="rol" class="block text-sm font-semibold">Rol:</label>
            <select name="rol" id="rol" class="border border-gray-400 px-4 py-2 w-full">
                @foreach($roles as $rol)
                    <option value="{{ $rol }}">{{ $rol }}</option>
                @endforeach
            </select>
        </div>
        <!-- Botón de guardar usuario -->
        <div class="mb-4 text-left">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Guardar Usuario</button>
        </div>
    </form>
</div>
<!-- Fin formulario para agregar usuario -->

<!-- Inicio footer -->
<footer class="bg-black text-white py-4 fixed bottom-0 w-full">
    <div class="container mx-auto px-4">
        <div class="text-white text-2xl text-center">
            <p>Todos los Derechos Reservados {{ date('Y') }} &copy;</p>
        </div>
    </div>
</footer>
<!-- Fin footer -->
    
</body>
</html>
