<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Main</title>
</head>
<body>

<!-- Inicio información dependiendo ROL -->

<!-- Inicio superUsuario -->
@if(Auth::user()->rol === 'superUsuario')
        <!-- <p>¡Eres un superUsuario. Aquí está la información compartida.</p> -->
        @include('superUsuario.mainSuper')  <!-- Agrego el include para no saturar el archivo actual -->

    <!-- Inicio empresaRol -->
        <div class="top-left-info ml-8 mt-4 text-lg text-semibold">
            <p>{{ $user->rol }} - Empresa: - -</p>
        </div>
    <!-- Cierre empresaRol -->

<!-- Inicio acciones disponibles -->
    <div class="text-center">
        <h1 class="text-black text-2xl text-bold">Acciones</h1>
    </div>
<!-- Cierre acciones disponibles -->

<!-- Cierre superUsuario -->

    @elseif(Auth::user()->rol === 'repreLegal' || Auth::user()->rol === 'juntaDirectiva' || Auth::user()->rol === 'revisorFiscal' || Auth::user()->rol === 'propietario' || Auth::user()->rol === 'proveedor' || Auth::user()->rol === 'cliente' || Auth::user()->rol === 'inmobiliaria')
        <p>¡Eres un repreLegal, juntaDirectiva, revisorFiscal, propietario, proveedor, cliente o inmobiliaria! Aquí está la información específica.</p>
    @elseif(Auth::user()->rol === 'normalUser')
        <p>¡Eres un usuario regular! Aquí está la información para usuarios regulares.</p>
    @else
        <p>¡Tu rol no está reconocido! Por favor, ponte en contacto con el administrador.</p>
    @endif




<!-- Cierre información dependiendo ROL -->



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