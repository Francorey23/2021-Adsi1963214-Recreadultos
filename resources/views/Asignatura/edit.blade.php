@extends('Plantillaweb')
@section('seccionuno')
    <h2>Edicion de asignatura No. {{$editarAsignatura->id}}</h2>
    <form action="{{route('asignaturas.update', $editarAsignatura)}}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" name="nombres" placeholder="Nombre asignatura" class="form-control mb-2" value="{{$editarAsignatura->nombres}}">
        <input type="date" name="fecha" placeholder="Fecha" class="form-control mb-2" value="{{$editarAsignatura->fecha}}">
        
        <button type="submit" class="btn btn-primary btn-block">Actualizar</button>


    </form>
@endsection