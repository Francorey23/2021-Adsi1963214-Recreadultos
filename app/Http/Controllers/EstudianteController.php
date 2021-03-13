<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Estudiante::All();
        return view('estudiante.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Estudiante  = new Estudiante;

        if ($request->hasFile('foto')) 
        {
            $Empleado['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        //$Estudiante->nombre Toma los datos del formulario
        //$request->nombre Asigna a la BD
        $Estudiante->nombre = $request->nombre;
        $Estudiante->email = $request->email;
        $Estudiante->celular = $request->celular;
        $Estudiante->fecha_nacimiento = $request->fecha_nacimiento;
        $Estudiante->foto = $request->foto;
        $Estudiante->save();

        return view('estudiante.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEstudiante = Estudiante::Find($id);
        return view('estudiante.edit', compact('editEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editEstudiante = Estudiante::Find($id);

        $editEstudiante->nombre = $request->nombre;
        $editEstudiante->email = $request->email;
        $editEstudiante->celular = $request->celular;
        $editEstudiante->fecha_nacimiento = $request->fecha_nacimiento;
        $editEstudiante->foto = $request->foto;
        $editEstudiante->save();

        return view('estudiante.create');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarEstudiante = Estudiante::Find($id);
        $eliminarEstudiante->delete();
        return view('estudiante.create');

    }
}
