<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empresa</title>
</head>
<body class="flex flex-col min-h-screen">
    
<!-- Inicio navegación superior -->
@include('superUsuario.headerSuper') <!-- HEADER --> 
<!-- Fin navegación superior -->

<h2 class="text-xl font-semibold text-center mt-4">Agregar Nueva Empresa</h2>

<!-- Inicio Formulario crear empresa -->
<div class="container mx-auto px-4 mt-8 mb-6 grid grid-cols-2 gap-4">
    <div>
        <form action="{{ route('empresas.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="codigo_empresa" class="block text-gray-700 text-sm font-bold mb-2">Código Empresa:</label>
                <input type="text" id="codigo_empresa" name="codigo_empresa" value="{{ old('codigo_empresa') }}"  class="border border-gray-400 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="tipo_empresa" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Empresa:</label>
                <select name="tipo_empresa" id="tipo_empresa" class="border border-gray-400 rounded-md py-2 px-3 w-full">
                    @foreach($tiposEmpresa as $tipo_empresa)
                        <option value="{{ $tipo_empresa }}">{{ $tipo_empresa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="numero_identificacion" class="block text-gray-700 text-sm font-bold mb-2">Número de Identificación:</label>
                <input type="number" id="numero_identificacion" name="numero_identificacion" value="{{ old('numero_identificacion') }}"  class="border border-gray-400 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="persona_juridica" class="block text-gray-700 text-sm font-bold mb-2">Persona Jurídica:</label>
                <select name="persona_juridica" id="persona_juridica" class="border border-gray-400 rounded-md py-2 px-3 w-full">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="primer_nombre" class="block text-gray-700 text-sm font-bold mb-2">Primer Nombre:</label>
                <input type="text" id="primer_nombre" name="primer_nombre" value="{{ old('primer_nombre') }}"  class="border border-gray-400 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="segundo_nombre" class="block text-gray-700 text-sm font-bold mb-2">Segundo Nombre:</label>
                <input type="text" id="segundo_nombre" name="segundo_nombre" value="{{ old('segundo_nombre') }}"  class="border border-gray-400 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="primer_apellido" class="block text-gray-700 text-sm font-bold mb-2">Primer Apellido:</label>
                <input type="text" id="primer_apellido" name="primer_apellido" value="{{ old('primer_apellido') }}"  class="border border-gray-400 rounded-md py-2 px-3 w-full">
            </div>
            <div class="mb-4">
                <label for="segundo_apellido" class="block text-gray-700 text-sm font-bold mb-2">Segundo Apellido:</label>
                <input type="text" id="segundo_apellido" name="segundo_apellido" value="{{ old('segundo_apellido') }}"  class="border border-gray-400 rounded-md py-2 px-3 w-full">
            </div>

        </form>
    </div>
</div>
<!-- Fin formulario crear empresa -->


<!-- Inicio footer -->
<footer class="bg-black text-white py-4 mt-auto">
    <div class="container mx-auto px-4">
        <div class="text-white text-2xl text-center">
            <p>Todos los Derechos Reservados {{ date('Y') }} &copy;</p>
        </div>
    </div>
</footer>
<!-- Fin footer -->

</body>
</html>