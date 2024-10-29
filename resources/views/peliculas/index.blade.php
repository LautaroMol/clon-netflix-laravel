
@extends('layouts.app')

@section('contenido')
    <h1>hola mundo</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peliculas as  $pelicula)
            <tr>
                <td>{{$pelicula->id}}</td>
                <td>{{$pelicula->nombre}}</td>
                <td>{{$pelicula->descripcion}}</td>
                <td>{{$pelicula->imagen}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection
