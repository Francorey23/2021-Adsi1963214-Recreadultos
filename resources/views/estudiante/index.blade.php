@extends('Plantillaweb')
    @section('seccionuno')

    <h2>Bienvenidos aprendices Ficha 1963214</h2>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datos as $dato)
        <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->nombre}}</td>
      <td>{{$dato->email}}</td>
      <td>{{$dato->celular}}</td>
      <td>{{$dato->fecha_nacimiento}}</td>
      <td>{{$dato->foto}}</td>
      <td>
        <a href="{{url('/estudiantes/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
        <form action="{{route('estudiantes.destroy', $dato)}}" class="d-inline" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm"> Eliminar</button>
        </form>
      </td>

    </tr>    
    @endforeach

  </tbody>
</table>
        
    @endsection