<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    // Función para mostrar la lista de empresas
    public function index()
    {
        $empresas = Empresa::all();
        return view('superUsuario.empresas.adminEmpresas', compact('empresas'));
    }

    // Función para mostrar el formulario de creación de empresa
    public function create()
    {
        return view('superUsuario.empresas.createEmpresa');
    }

    // Función para guardar una nueva empresa en la base de datos
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            // Define las reglas de validación según tus necesidades
        ]);

        // Crear una nueva empresa
        Empresa::create($request->all());

        // Redireccionar con un mensaje de éxito
        return redirect()->route('empresas.index')->with('success', 'Empresa creada correctamente.');
    }

    // Función para mostrar el formulario de edición de empresa
    public function edit(Empresa $empresa)
    {
        return view('superUsuario.empresas.editEmpresa', compact('empresa'));
    }

    // Función para actualizar una empresa en la base de datos
    public function update(Request $request, Empresa $empresa)
    {
        // Validar los datos del formulario
        $request->validate([
            // Define las reglas de validación según tus necesidades
        ]);

        // Actualizar la empresa
        $empresa->update($request->all());

        // Redireccionar con un mensaje de éxito
        return redirect()->route('empresas.index')->with('success', 'Empresa actualizada correctamente.');
    }

    // Función para habilitar o inhabilitar una empresa
    public function toggle(Empresa $empresa)
    {
        $empresa->active = !$empresa->active;
        $empresa->save();

        return redirect()->back()->with('success', 'Estado de la empresa actualizado correctamente.');
    }
}
