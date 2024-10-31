@extends('layouts.app')

@section('contenido')
    <form action="{{route('peliculas.update',$pelicula)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre del a pelicula</label>
            <input type="text" class="form-control" name="nombre" value="{{$pelicula->nombre}}">
        </div>
        <div class="mb-3">Descripcion</label>
            <input type="text" class="form-control" name="imagen" value="{{$pelicula->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Imagen</label>
            <input type="text" class="form-control" name="descripcion"value="{{$pelicula->imagen}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Trailer</label>
            <input type="text" class="form-control" name="trailer"value="{{$pelicula->trailer}}">
        </div>

        <button type="submit" class="btn bg-success">Guardar</button>
    </form>
@endsection
