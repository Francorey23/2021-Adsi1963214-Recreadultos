<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Asignatura::All();
        return view('Asignatura.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Asignatura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignatura = new Asignatura;

        $asignatura->nombres = $request->nombres;
        $asignatura->fecha = $request->fecha;
        $asignatura->save();
        return view('Asignatura.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editarAsignatura = Asignatura::find($id);
        return view('Asignatura.edit', compact('editarAsignatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarAsignatura = Asignatura::Find($id);

        $editarAsignatura->nombres = $request->nombres;
        $editarAsignatura->fecha = $request->fecha;
        $editarAsignatura->save();

        //return redirect()->route('Asignatura.index');
        return view('Asignatura.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarAsignatura = Asignatura::Find($id);
        $eliminarAsignatura->delete();
        return view('Asignatura.create');
    }
}
