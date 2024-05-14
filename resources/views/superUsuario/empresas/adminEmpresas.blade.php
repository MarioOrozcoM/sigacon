<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Empresas</title>
</head>
<body class="flex flex-col min-h-screen">
    
<!-- Inicio navegación superior -->
@include('superUsuario.headerSuper') <!-- HEADER --> 
<!-- Fin navegación superior -->

<!-- Inicio rol -->
@include('includes.show_rol')
<!-- Fin rol -->

<div class="text-center">
    <h1 class="text-bold text-2xl text-black">Administrar Empresas</h1>
</div>

<!-- Inicio Administrar Empresas -->
<div class="container mx-auto px-4 mt-8">
    <h2 class="text-xl font-semibold">Lista de Empresas</h2>
    <!-- Barra de búsqueda -->
    <div class="mt-4">
        <input type="text" id="searchInput" placeholder="Buscar por nombre" class="border border-gray-400 px-4 py-2 mb-4 mr-6">
        <!-- Agregar Empresa -->
        <a href="{{ route('empresas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Agregar Empresa</a>
    </div>

    <!-- Lista de Empresas -->
    <table class="w-full border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2">Codigo Empresa</th>
                <th class="border border-gray-400 px-4 py-2">Nombre Comercial</th>
                <th class="border border-gray-400 px-4 py-2">Logotipo</th>
                <!-- <th class="border border-gray-400 px-4 py-2 w-40">Acciones</th> -->
            </tr>
        </thead>
        <tbody>
            <!-- Iterar sobre la lista de usuarios -->
            @foreach($empresas as $empresa)
            <tr class="user-row">
            <td class="border border-gray-400 px-4 py-2 user-name">
                {{ $empresa->codigo_empresa }}

            </td>
                <td class="border border-gray-400 px-4 py-2">{{ $empresa->nombre_comercial }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $empresa->logo }}</td>
                <td class="border border-gray-400 px-4 py-2 flex items-center">
                    <form class="mr-2" action="{{ route('empresas.edit', $empresa->id) }}">
                        @csrf
                        <a href="{{ route('empresas.edit', $empresa->id) }}" class="text-blue-500 hover:underline text-bold mr-2">Editar</a>
                    </form>
                    <!-- En lugar de eliminar, inhabilitar/habilitar -->
                        <form id="toggle-form-{{ $empresa->id }}" action="{{ route('empresas.toggle', $empresa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @if ($empresa->active)
                                <button type="submit" class="text-gray-500 hover:underline text-bold">Inhabilitar</button>
                            @else
                                <button type="submit" class="text-green-500 hover:underline text-bold">Habilitar</button>
                            @endif
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!-- Fin Administrar Empresas -->



<!-- Inicio footer -->
@include('includes.footer')
<!-- Fin footer -->

</body>
</html>