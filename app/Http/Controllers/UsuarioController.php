<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Usuario;
use App\Models\Perfil;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::orderBy('nomusu')->orderBy('nomusu')->paginate(8);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $misPerfiles=Perfil::getArrayIdNombre();
        return view('usuarios.create', compact('misPerfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validar
         $request->validate([
            'nomusu' => ['required', 'string', 'min:3', 'max:50', 'unique:usuarios,nomusu', 'regex:/^\S*$/u'],
            'email' => ['required', 'string', 'min:5', 'max:100', 'unique:usuarios,email'],
            'localidad' => ['required', 'string', 'min:3', 'max:90'],
        ]);
        //Procesar
        try {
            Usuario::create($request->all());
        } catch (\Exception $ex) {
            return redirect()->route('usuarios.index')->with("mensaje", "Error ".$ex->getMessage());
        }
        return redirect()->route('usuarios.index')->with("mensaje", "Usuario creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.details', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        $misPerfiles=Perfil::getArrayIdNombre();
        return view('usuarios.edit', compact('usuario', 'misPerfiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //Validar
          $request->validate([
            'nomusu' => ['required', 'string', 'min:3', 'max:50', 'unique:usuarios,nomusu'.$usuario->id, 'regex:/^\S*$/u'],
            'email' => ['required', 'string', 'min:5', 'max:100', 'unique:usuarios,email'.$usuario->id],
            'localidad' => ['required', 'string', 'min:3', 'max:90'],
        ]);
        //Procesar
        try {
            $usuario->update($request->all());
        } catch (\Exception $ex) {
            return redirect()->route('usuarios.index')->with("mensaje", "Error ".$ex->getMessage());
        }
        return redirect()->route('usuarios.index')->with("mensaje", "Usuario actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        try {
            $usuario->delete();
        } catch (\Exception $ex) {
            return redirect()->route('usuarios.index')->with("mensaje", "Error:".$ex->getMessage());
        }
        return redirect()->route('usuarios.index')->with("mensaje", "Usuario eliminado");
    }
}
