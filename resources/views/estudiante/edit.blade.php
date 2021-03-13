@extends('plantillaweb')
    @section('seccionuno')
        <h2>Formulario para editar Estudiante {{$editEstudiante->id}}</h2>

        <form action="{{route('estudiantes.update', $editEstudiante)}}" method="POST" enctype="multipart/form-data"> 
            @method('PUT')
            @csrf

            <input type="text" name="nombre" placeholder="Nombres y Apellidos" class="form-control mb-2" value="{{$editEstudiante->nombre}}">
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" value="{{$editEstudiante->email}}">
            <input type="celular" name="celular" placeholder="Celular" class="form-control mb-2" value="{{$editEstudiante->celular}}">
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control mb-2" value="{{$editEstudiante->fecha_nacimiento}}">
            <input type="file" name="foto" placeholder="Fotografia" class="form-control mb-2" value="{{$editEstudiante->foto}}">

            <button class="btn btn-primary btn-block" type="submit">Insertar</button>

        </form>
    @endsection