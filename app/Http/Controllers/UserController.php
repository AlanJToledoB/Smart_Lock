<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
    
        // Resto de la lógica para actualizar la contraseña y otros campos del perfil...
    
        $user->save();
    
        return redirect()->route('profile.show')->with('success', 'Perfil actualizado con éxito.');
    }
    
    
    public function destroy()
    {
        $user = Auth::user();

        // Aquí puedes agregar cualquier lógica adicional que necesites antes de eliminar el usuario, como por ejemplo, eliminar registros relacionados, etc.

        // Elimina al usuario de la base de datos
        $user->delete();

        // Cierra la sesión del usuario
        Auth::logout();

        // Redirecciona a la página de inicio u otra página de tu elección
        return redirect('/')->with('success', 'Tu cuenta ha sido eliminada correctamente.');
    }

        public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if (Hash::check($request->input('password'), $user->password)) {
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            return redirect()->route('profile.show')->with('success', 'Contraseña actualizada con éxito.');
        } else {
            return redirect()->back()->with('error', 'La contraseña actual es incorrecta.');
        }
    }
}