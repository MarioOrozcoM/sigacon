<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Mi Perfil</title>
</head>
<body>
    
<!-- Inicio navegación superior -->
<header class="bg-black">
    <div class="container mx-auto flex items-center justify-between px-4 py-2 text-white">
        
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-60">
        
        <div class="flex space-x-4 text-lg">
            <a href="{{ url('/user_dashboard') }}" class="hover:text-gray-400">Regresar</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="hover:text-gray-400">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</header> <!-- Cierre navegación superior -->

<!-- Inicio formulario del perfil -->
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold text-center mb-4">Mi Perfil</h1>

    <form  class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="block font-semibold mb-2">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="Nombre del usuario" readonly
                class="w-full border border-gray-300 rounded-md py-2 px-4" disabled>
        </div>

        <div class="mb-4">
            <label for="usuario" class="block font-semibold mb-2">Usuario</label>
            <input type="text" id="usuario" name="usuario" value="Nombre de usuario" readonly
                class="w-full border border-gray-300 rounded-md py-2 px-4" disabled>
        </div>

        <div class="mb-4">
            <label for="nueva-contrasena" class="block font-semibold mb-2">Nueva Contraseña</label>
            <input type="password" id="nueva-contrasena" name="nueva-contrasena"
                class="w-full border border-gray-300 rounded-md py-2 px-4" required>
        </div>

        <div class="mb-4">
            <label for="confirmar-contrasena" class="block font-semibold mb-2">Confirmar Contraseña</label>
            <input type="password" id="confirmar-contrasena" name="confirmar-contrasena"
                class="w-full border border-gray-300 rounded-md py-2 px-4" required>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Continuar</button>
        </div>
    </form>
</div>
<!-- Cierre formulario del perfil -->

<!-- Inicio Footer -->
<footer class="bg-black text-white py-4 fixed bottom-0 w-full">
    <div class="container mx-auto px-4">
            <div class="text-white text-2xl text-center">
                <p>Todos los Derechos Reservados {{ date('Y') }} &copy;</p>
            </div>
    </div>
</footer>
<!-- Cierre Footer -->

</body>
</html>