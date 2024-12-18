<?php

namespace App\Modules\Users\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Modules\Users\Models\User;

class UserController extends Controller {
    public function index()
    {
        if (session()->has('user_id')) {
            return redirect()->route('cliente.index');
        }

        return view('Users::index');
    }

    public function login()
    {
        $user = User::where('name', request('name'))->first();

        if ($user && Hash::check(request('password'), $user->password)) {
            session(['user_id' => $user->id]);

            return redirect()->route('cliente.index');
        }

            return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();  // Desloguea al usuario
        session()->invalidate();  // Invalida la sesión completamente
        session()->regenerateToken();  // Regenera el token CSRF para evitar ataques CSRF
        return redirect()->route('home');  // Redirige a la página de login
    }
}
