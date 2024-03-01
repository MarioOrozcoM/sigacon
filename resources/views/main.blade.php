<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Main</title>
</head>
<body>
    
<!-- Inicio navegación superior -->
<header class="bg-black">
    <div class="container mx-auto flex items-center justify-between px-4 py-2 text-white">
       
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-60">
       
        <div class="flex space-x-4 text-lg">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="hover:text-gray-400">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</header> <!-- Cierre navegación superior -->

<!-- Inicio empresaRol -->
<div class="top-left-info ml-8 mt-4 text-lg">
    <p>SuperUsuario - Empresa: SigaCon</p>
</div>
<!-- Cierre empresaRol -->

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