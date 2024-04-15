<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Editar Usuario Info</title>
</head>
<body class="flex flex-col min-h-screen">
    
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

<!-- Inicio formulario editar info usuario -->
<div class="container mx-auto px-4 mt-8 mb-6">
    <h2 class="text-xl font-bold mb-4 text-center">Editar Usuario</h2>
    <h2 class="text-xl font-semibold mb-4">Datos Generales:</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">Primer Nombre:</label>
            <input type="text" id="first_name" name="first_name" value="{{ $user->first_name }}" autocomplete="given-name" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="second_name" class="block text-gray-700 text-sm font-bold mb-2">Segundo Nombre:</label>
            <input type="text" id="second_name" name="second_name" value="{{ $user->second_name }}" autocomplete="additional-name" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="first_lastname" class="block text-gray-700 text-sm font-bold mb-2">Primer Apellido:</label>
            <input type="text" id="first_lastname" name="first_lastname" value="{{ $user->first_lastname }}" autocomplete="family-name" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="second_lastname" class="block text-gray-700 text-sm font-bold mb-2">Segundo Apellido:</label>
            <input type="text" id="second_lastname" name="second_lastname" value="{{ $user->second_lastname }}" autocomplete="additional-name" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" autocomplete="email" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="rol" class="block text-gray-700 text-sm font-bold mb-2">Rol:</label>
            <select name="rol" id="rol" class="border border-gray-400 rounded-md py-2 px-3 w-full">
                @foreach($roles as $rol)
                    <option value="{{ $rol }}" @if($user->rol == $rol) selected @endif>{{ $rol }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-8">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar Usuario</button>
        </div>
    </form>
</div>
<!-- Fin formulario editar info usuario -->


<!-- Inicio footer -->
<footer class="bg-black text-white py-4 mt-auto">
    <div class="container mx-auto px-4">
        <div class="text-white text-2xl text-center">
            <p>Todos los Derechos Reservados {{ date('Y') }} &copy;</p>
        </div>
    </div>
</footer>
<!-- Fin footer -->

</body>
</html>