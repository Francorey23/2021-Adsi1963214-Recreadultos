@extends('Plantillaweb')
@section('seccionuno')
    <form action="{{url('/asignaturas')}}" method="POST"> 
        @csrf
            <H2>Formulario de registro Asignaturas</H2>
          <input type="text" name="nombres" placeholder="Nombre asignatura" class="form-control mb-2">
          <input type="date" name="fecha" placeholder="Fecha ingreso" class="form-control mb-2">

          <button class="btn btn-primary btn-block" type="submit">Insertar</button>


    </form>
@endsection