@extends('plantillaweb')
    @section('seccionuno')
    <form action="{{url('/estudiantes')}}"  method="POST" enctype="multipart/form-data"> 
        @csrf
        <input type="text" name="nombre" placeholder="Nombres y Apellidos" class="form-control mb-2">
        <input type="email" name="email" placeholder="Email" class="form-control mb-2">
        <input type="celular" name="celular" placeholder="Celular" class="form-control mb-2">
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control mb-2">
        <input type="file" name="foto" placeholder="Fotografia" class="form-control mb-2">

        <button class="btn btn-primary btn-block" type="submit">Insertar</button>





    </form>
    
    @endsection