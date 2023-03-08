@extends('layouts/main')
@section('contenido') 
<div class="container">
    <h3>Actualizar  registro</h3>
    <div class="row">
        <div class="col">
            <a href="/" class="btn btn-info">Regresar</a>
            <hr>
            <form action="{{route('update', $items->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="nombre">Nombre del equipo</label>
                <input type="text" name="nombre" id="nombre" required value="{{$items->nombre}}" class="form-control">
                <label for="marca">marca</label>
                <input type="text" name="marca" id="marca" required value="{{$items->marca}}" class="form-control">
                <label for="modelo">modelo</label>
                <input type="text" name="modelo" id="modelo" required value="{{$items->modelo}}" class="form-control">
                <label for="ram">ram</label>
                <input type="text" name="ram" id="ram" required value="{{$items->ram}}" class="form-control">
                <label for="procesador">procesador</label>
                <input type="text" name="procesador" id="procesador" required value="{{$items->procesador}}" class="form-control">
                <label for="discoDuro">Disco duro</label>
                <input type="text" name="discoDuro" id="discoDuro" required value="{{$items->discoDuro}}" class="form-control">
                <label for="descripcion">descripcion</label>
                <input type="text" name="descripcion" id="descripcion" required value="{{$items->descripcion}}" class="form-control">
                <label for="imagen">url</label>
                <input type="text" name="imagen" id="imagen"  class="form-control" value="{{$items->imagen}}">
                <button class="btn btn-warning mt-3">
                    Actualizar    
                </button>   
            </form>
        </div>
    </div>
</div>
