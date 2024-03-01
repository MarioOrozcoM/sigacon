<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Rol</title>
</head>
<body>
    
<!-- Inicio navegación superior -->
<header class="bg-black">
    <div class="container mx-auto flex items-center justify-between px-4 py-2 text-white">
        
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-60">
        
        <div class="flex space-x-4 text-lg">
            <a href="{{ url('/mi_perfil') }}" class="hover:text-gray-400">Perfil</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="hover:text-gray-400">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</header> <!-- Cierre navegación superior -->

<!-- Inicio usuarioNombre -->
<div class="top-left-info ml-8 mt-4 text-lg">
    <p>Juan Carlos López Rodríguez</p>
</div>
<!-- Cierre usuarioNombre -->

<!-- Inicio mis empresas -->
<div class="container mx-auto">
    <h1 class="text-3xl font-bold text-center mt-8 mb-4">Mis Empresas</h1>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="empresa" class="block font-semibold mb-2">Empresa</label>
            <select name="empresa" id="empresa" class="w-full border border-gray-300 rounded-md py-2 px-4">
                <option value="empresa1">Empresa 1</option>
                <option value="empresa2">Empresa 2</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>
        </div>

        <div>
            <label for="rol" class="block font-semibold mb-2">Rol</label>
            <select name="rol" id="rol" class="w-full border border-gray-300 rounded-md py-2 px-4">
                <option value="rol1">Rol 1</option>
                <option value="rol2">Rol 2</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>
        </div>
    </div>

    <div class="text-right mt-8">
        <a href="{{ url('/main') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Siguiente</a>
    </div>
</div>
<!-- Cierre mis empresas -->


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