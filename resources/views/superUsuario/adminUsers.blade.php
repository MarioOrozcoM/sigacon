<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Admin Users</title>
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
<div class="top-left-info ml-8 mt-4 text-lg text-semibold">
        <p>{{ $user->rol }}</p>
</div>
<div class="text-center">
    <h1 class="text-bold text-2xl text-black">Administrar Usuarios</h1>
</div>


<!-- Inicio administrar usuarios -->
<div class="container mx-auto px-4 mt-8">
    <h2 class="text-xl font-semibold">Lista de Usuarios</h2>
    
    <!-- Barra de búsqueda -->
    <input type="text" id="searchInput" placeholder="Buscar por nombre" class="border border-gray-400 px-4 py-2 mb-4">
    
    <!-- Lista de usuarios -->
    <table class="w-full border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2">Nombre</th>
                <th class="border border-gray-400 px-4 py-2">Email</th>
                <th class="border border-gray-400 px-4 py-2">Rol</th>
                <th class="border border-gray-400 px-4 py-2 w-40">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Iterar sobre la lista de usuarios -->
            @foreach($users as $user)
            <tr class="user-row">
                <td class="border border-gray-400 px-4 py-2 user-name">{{ $user->name }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $user->email }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $user->rol }}</td>
                <td class="border border-gray-400 px-4 py-2 flex items-center">
                    <form class="mr-2" action="{{ route('users.edit', $user->id) }}">
                        @csrf
                        <button type="submit" class="text-blue-500 hover:underline text-bold">Editar</button>
                    </form>
                    <!-- En lugar de eliminar, inhabilitar/habilitar -->
                    @if ($user->rol !== 'superUsuario')
                        <form id="toggle-form-{{ $user->id }}" action="{{ route('users.toggle', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @if ($user->active)
                                <button type="submit" class="text-gray-500 hover:underline text-bold">Inhabilitar</button>
                            @else
                                <button type="submit" class="text-green-500 hover:underline text-bold">Habilitar</button>
                            @endif
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botón para agregar usuario -->
    <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Agregar Usuario</a>
</div>
<!-- Fin administrar usuarios -->



<!-- Inicio footer -->
@include('includes.footer')
<!-- Fin footer -->

<!-- JavaScript para barra de búsqueda -->
<script src="{{ mix('js/app.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');

        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.trim().toLowerCase();

            const users = document.querySelectorAll('.user-row');

            users.forEach(function(user) {
                const name = user.querySelector('.user-name').textContent.trim().toLowerCase();
                
                if (name.includes(searchTerm)) {
                    user.style.display = 'table-row';
                } else {
                    user.style.display = 'none';
                }
            });
        });
    });
</script>

</body>
</html>
