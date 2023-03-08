@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h3>Agregar nuevo registro</h3>
        <div class="row">
            <div class="col">
                <a href="/" class="btn btn-info">Regresar</a>
                <hr>
                <form action="/store" method="post">
                    @csrf
                    @method('POST')
                    <label for="nombre">Nombre del equipo</label>
                    <input type="text" name="nombre" id="nombre" required class="form-control">
                    <label for="marca">marca</label>
                    <input type="text" name="marca" id="marca" required class="form-control">
                    <label for="modelo">modelo</label>
                    <input type="text" name="modelo" id="modelo" required class="form-control">
                    <label for="ram">ram</label>
                    <input type="text" name="ram" id="ram" required class="form-control">
                    <label for="procesador">procesador</label>
                    <input type="text" name="procesador" id="procesador" required class="form-control">
                    <label for="discoDuro">Disco duro</label>
                    <input type="text" name="discoDuro" id="discoDuro" required class="form-control">
                    <label for="descripcion">descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" required class="form-control">
                    <label for="imagen">url</label>
                    <input type="text" name="imagen" id="imagen"  class="form-control">
                    <button class="btn btn-primary mt-3">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection