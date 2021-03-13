@extends('Plantillaweb')
    @section('seccionuno')
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
    
    @foreach ($datos as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombres}}</td>
      <td>{{$item->fecha}}</td>
      <td>
          <a href="{{url('asignaturas/'.$item->id.'/edit')}}">
              <button type="button" class="btn btn-warning btn-sm">Editar</button>
          </a>

           <form action="{{route('asignaturas.destroy', $item)}}" class="d-inline" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Eliminar </button>
           </form>
      </td>
    </tr>    
    @endforeach
    
  </tbody>
</table>
        
    @endsection