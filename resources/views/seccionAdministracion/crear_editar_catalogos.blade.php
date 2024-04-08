<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Crear/editar Catalogos</title>
</head>
<body class="flex flex-col min-h-screen">
 
<!-- Inicio navegación superior -->
<header class="bg-black">
    <div class="container mx-auto flex items-center justify-between px-4 py-2 text-white">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-60">
        
        <div class="flex space-x-4 text-white text-lg">
            <a href="{{ url('/main') }}" class="hover:text-gray-400">Inicio</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="hover:text-gray-400">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</header>
<!-- Fin navegación superior -->

<!-- Inicio empresaRol -->
@include('includes.show_rol')
<!-- Cierre empresaRol -->

<div>
    <h1 class="text-center font-semibold text-2xl">Crear/Editar Catálogos</h1>
</div>

<!-- Inicio opciones disponibles -->
<div class="flex justify-center">
    <table class="m-6 w-1/4 border-collapse border text-lg text-black font-semibold">
        <tr>
            <td class="border-b hover:underline">1- Crear editar Terceros</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">2- Crear editar Empresas</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">3- Crear editar Cuentas</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">4- Crear editar Usuarios/Roles</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">5- Crear editar Reportes</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">6- Crear editar Documentos</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">7- Crear editar Subcategorías</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">8- Crear editar Organización Territorial y Códigos</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">9- Crear editar Nomina</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">10- Crear editar Inventarios</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">11- Crear editar Utilidades</td>
        </tr>
        <tr>
            <td class="border-b hover:underline">12- Crear editar Contabilidad</td>
        </tr>
    </table>
</div>
<!-- Fin opciones disponibles -->



<!-- Inicio Footer -->
@include('includes.footer')
<!-- Cierre Footer -->


<!-- Estilos CSS -->
<style>
    .border-collapse,
    .border,
    .border-b {
        border-color: #C4C4C4;
    }
</style>

</body>
</html>