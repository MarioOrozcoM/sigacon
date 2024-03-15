<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    // Función para mostrar la lista de usuarios
    public function index()
    {
        $users = User::all();
        $user = Auth::user();
        return view('superUsuario.adminUsers', compact('users'), ['user' => $user]);
    }

    // Función para mostrar el formulario de creación de usuario
    public function create()
    {
        $roles = [
            'superUsuario',
            'contador',
            'administrador',
            'repreLegal',
            'juntaDirectiva',
            'revisorFiscal',
            'propietario',
            'proveedor',
            'cliente',
            'inmobiliaria',
            'normalUser'
        ];
        return view('superUsuario.editUsers', compact('roles'));
    }

    // Función para guardar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string|min:6',
            'rol' => 'required|string|in:superUsuario,contador,administrador,repreLegal,juntaDirectiva,revisorFiscal,propietario,proveedor,cliente,inmobiliaria,normalUser', // Define los roles permitidos aquí
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'rol' => $request->rol,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    // Función para eliminar un usuario de la base de datos
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }

     
}

