<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Main</title>
</head>
<body class="flex flex-col min-h-screen">

<!-- Inicio información dependiendo ROL -->  <!-- Usaré include para no saturar el archivo de código -->

<!-- Inicio superUsuario -->
@if(Auth::user()->rol === 'superUsuario')
        <!-- <p>¡Eres un superUsuario. Aquí está la información compartida.</p> -->
        @include('superUsuario.headerSuper') <!-- HEADER -->  

    <!-- Inicio empresaRol -->
        <div class="top-left-info ml-8 mt-4 text-lg text-semibold">
            <p>{{ $user->rol }} - Empresa: - -</p>
        </div>
    <!-- Cierre empresaRol -->
<!-- Inicio acciones disponibles -->
    <div class="text-center">
        <h1 class="text-black text-2xl text-bold">Acciones</h1>
    </div>
    @include('superUsuario.viewActions')
<!-- Cierre acciones disponibles -->
<!-- Cierre superUsuario -->


<!-- Inicio contador -->
    @elseif(Auth::user()->rol === 'contador')
    <!-- Inicio Header -->
    @include('contador.headerContador')
    <!-- Fin Header -->
    <!-- Inicio empresa rol -->
    <div class="top-left-info ml-8 mt-4 text-lg text-semibold">
            <p>{{ $user->rol }} - Empresa: - -</p>
    </div>
    <!-- Cierre empresa rol -->
    <!-- Inicio acciones disponibles -->
    <div class="text-center">
        <h1 class="text-black text-2xl text-bold">Acciones</h1>
    </div>
    @include('contador.viewActions')
    <!-- Fin acciones disponibles -->
<!-- Fin contador -->


<!-- Inicio administrador -->
@elseif(Auth::user()->rol === 'administrador')
<!-- Inicio header -->
    @include('contador.headerContador')  <!-- Estoy reciclando el header del contador ya que es el mismo -->
<!-- Fin header -->
<!-- Inicio empresa rol -->
    <div class="top-left-info ml-8 mt-4 text-lg text-semibold">
            <p>{{ $user->rol }} - Empresa: - -</p>
    </div>
<!-- Fin empresa rol -->
<!-- Inicio acciones disponibles -->
    <div class="text-center">
        <h1 class="text-black text-2xl text-bold">Acciones</h1>
    </div>
    @include('administrador.viewActions')
<!-- Fin acciones disponibles -->
<!-- Fin administrador -->


<!-- Inicio resto de usuarios -->
    @elseif(Auth::user()->rol === 'repreLegal' || Auth::user()->rol === 'juntaDirectiva' || Auth::user()->rol === 'revisorFiscal' || Auth::user()->rol === 'propietario' || Auth::user()->rol === 'proveedor' || Auth::user()->rol === 'cliente' || Auth::user()->rol === 'inmobiliaria')
    <!-- Inicio header -->
    @include('contador.headerContador') <!-- Estoy reciclando el header del contador ya que es el mismo -->
    <!-- Fin header -->
    <!-- Inicio empresa rol -->
    <div class="top-left-info ml-8 mt-4 text-lg text-semibold">
            <p>{{ $user->rol }} - Empresa: - -</p>
    </div>
    <!-- Fin empresa rol -->
    <!-- Inicio acciones disponibles -->
    <div class="text-center">
        <h1 class="text-black text-2xl text-bold">Acciones</h1>
    </div>
    @include('otros_roles.viewActions')
    <!-- Fin acciones disponibles -->
<!-- Fin resto de usuarios -->


    @elseif(Auth::user()->rol === 'normalUser')
        <p>¡Eres un usuario regular! Aquí está la información para usuarios regulares.</p>
    @else
        <p>¡Tu rol no está reconocido! Por favor, ponte en contacto con el administrador.</p>
    @endif




<!-- Cierre información dependiendo ROL -->



<!-- Inicio Footer -->
<footer class="bg-black text-white py-4 mt-auto">
    <div class="container mx-auto px-4">
        <div class="text-white text-2xl text-center">
            <p>Todos los Derechos Reservados {{ date('Y') }} &copy;</p>
        </div>
    </div>
</footer>
<!-- Cierre Footer -->

</body>
</html>