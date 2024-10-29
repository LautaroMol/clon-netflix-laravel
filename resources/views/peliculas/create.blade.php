@extends('layouts.app')

@section('contenido')
    <form action="{{route('peliculas.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre del a pelicula</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">Descripcion</label>
            <input type="text" class="form-control" name="imagen">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Imagen</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Trailer</label>
            <input type="text" class="form-control" name="trailer">
        </div>

        <button type="submit" class="btn bg-success">Guardar</button>
    </form>
@endsection
