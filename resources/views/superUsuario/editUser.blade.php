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
            <label for="document_type" class="block text-gray-700 text-sm font-bold mb-2">Documento Identificación:</label>
            <select name="document_type" id="document_type" class="border border-gray-400 rounded-md py-2 px-3 w-full">
                @foreach($document_types as $document_type)
                    <option value="{{ $document_type }}" @if($user->document_type == $document_type) selected @endif>{{ $document_type }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
        <input type="hidden" name="identification_number" value="{{ $user->identification_number }}">
        </div>
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
            <label for="rol" class="block text-gray-700 text-sm font-bold mb-2">Rol:</label>
            <select name="rol" id="rol" class="border border-gray-400 rounded-md py-2 px-3 w-full">
                @foreach($roles as $rol)
                    <option value="{{ $rol }}" @if($user->rol == $rol) selected @endif>{{ $rol }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="social_reason" class="block text-gray-700 text-sm font-bold mb-2">Razón Social:</label>
            <input type="text" id="social_reason" name="social_reason" value="{{ $user->social_reason }}" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="trade_name" class="block text-gray-700 text-sm font-bold mb-2">Nombre Comercial:</label>
            <input type="text" id="trade_name" name="trade_name" value="{{ $user->trade_name }}" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="physical_address" class="block text-gray-700 text-sm font-bold mb-2">Dirección Física:</label>
            <input type="text" id="physical_address" name="physical_address" value="{{ $user->physical_address }}" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" autocomplete="email" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Teléfono Fijo:</label>
            <input type="number" id="phone" name="phone" value="{{ $user->phone }}" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <label for="cellphone" class="block text-gray-700 text-sm font-bold mb-2">Celular:</label>
            <input type="number" id="cellphone" name="cellphone" value="{{ $user->cellphone }}" class="border border-gray-400 rounded-md py-2 px-3 w-full">
        </div>
        <h2 class="text-xl font-semibold mb-4">Datos Fiscales:</h2>
        <div class="mb-4">
            <label for="autoretenedor_renta" class="block text-gray-700 text-sm font-bold mb-2">AutoRetenedor Renta:</label>
            <select name="autoretenedor_renta" id="autoretenedor_renta" class="border border-gray-400 rounded-md py-2 px-3 w-full">
                @foreach($autoretenedor_rentas as $autoretenedor_renta)
                    <option value="{{ $autoretenedor_renta }}" @if($user->autoretenedor_renta == $autoretenedor_renta) selected @endif>{{ $autoretenedor_renta }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="autoretenedor_iva" class="block text-gray-700 text-sm font-bold mb-2">AutoRetenedor Iva:</label>
            <select name="autoretenedor_iva" id="autoretenedor_iva" class="border border-gray-400 rounded-md py-2 px-3 w-full">
                @foreach($autoretenedor_ivas as $autoretenedor_iva)
                    <option value="{{ $autoretenedor_iva }}" @if($user->autoretenedor_iva == $autoretenedor_iva) selected @endif>{{ $autoretenedor_iva }}</option>
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
@include('includes.footer')
<!-- Fin footer -->

</body>
</html>