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




<!-- Inicio footer -->
@include('includes.footer')
<!-- Fin footer -->

</body>
</html>