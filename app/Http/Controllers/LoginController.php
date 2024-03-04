<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function showLoginForm()
     {
         return view('inicio_sesion');
     }

    public function login(Request $request)
    {
        $credentials = $request->only('nombreUsuario', 'contrasena'); // Aquí ajustamos el nombre del campo a 'contrasena'

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirige al usuario
            return redirect()->intended('/user_dashboard');
        }

        // Autenticación fallida, vuelve al formulario con un mensaje de error
        return redirect()->back()->withErrors(['nombreUsuario' => 'Credenciales incorrectas']);
    }
}



