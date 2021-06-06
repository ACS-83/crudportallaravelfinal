<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles=Perfil::orderBy('nombre')->paginate(5);
        return view('perfiles.index', compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('perfiles.create');
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
            'nombre' => ['required', 'string', 'min:3', 'max:50', 'unique:perfils,nombre'],
            'descripcion' => ['required', 'string', 'min:5', 'max:100'],
        ]);
        //Procesar
        try {
            Perfil::create($request->all());
        } catch (\Exception $ex) {
            return redirect()->route('perfiles.index')->with("mensaje", "Error ".$ex->getMessage());
        }
        return redirect()->route('perfiles.index')->with("mensaje", "Perfil creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return view('perfiles.details', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        return view('perfiles.edit', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
         $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'max:50'],
            'descripcion' => ['required', 'string', 'min:5', 'max:100']
        ]);
        //Procesar
        try {
            $perfil->update($request->all());
        } catch (\Exception $ex) {
            return redirect()->route('perfiles.index')->with("mensaje", "Error ".$ex->getMessage());
        }
        return redirect()->route('perfiles.index')->with("mensaje", "Perfil actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        try {
            $perfil->delete();
        } catch (\Exception $ex) {
            return redirect()->route('perfiles.index')->with("mensaje", "Error:".$ex->getMessage());
        }
        return redirect()->route('perfiles.index')->with("mensaje", "Perfil eliminado");
    }
}
