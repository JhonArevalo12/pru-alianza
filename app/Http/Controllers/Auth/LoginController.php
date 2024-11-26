<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome'); // Asegúrate de tener esta vista
    }

    public function login(Request $request)
    {
        // Validar las credenciales
        $request->validate([
            'username' => 'required|string', // Cambia 'email' por 'username'
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($request->only('username', 'password'))) {
            // Redirigir a la página deseada después del inicio de sesión
            return redirect()->intended('/admin'); // Cambia esto a la ruta de tu panel de administración
        }

        // Si las credenciales son incorrectas, redirigir de vuelta con un error
        return back()->withErrors([
            'username' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}