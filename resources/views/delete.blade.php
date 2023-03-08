@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    El registro a eliminar es
                </h2>
                <ul>
                    <li>el nombre es: {{$items->nombre}}</li>
                    <li>la marca es: {{$items->marca}}</li>
                    <li>el modelo es: {{$items->modelo}}</li>
                    <li>la ram es: {{$items->ram}}</li>
                    <li>el procesador es: {{$items->procesador}}</li>
                    <li>el disco duro es: {{$items->discoDuro}}</li>
                    <li>la descripcion es: {{$items->descripcion}}</li>
                    <li>la imagen es: {{$items->imagen}}</li>
                </ul>
                <form action="{{route('destroy', $items->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/" class="btn btn-secondary mt-3">Regresar</a>
                    <button class="btn btn-danger mt-3">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection