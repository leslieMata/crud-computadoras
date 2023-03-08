@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h2>
            Crud Computadoras
        </h2>
        <div class="row">
            <div class="col">
                <a href="/create"class="btn btn-primary">Agregar nuevo registro</a>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>marca</th>
                            <th>modelo</th>
                            <th>ram</th>
                            <th>procesador</th>
                            <th>disco duro</th>
                            <th>descripcion</th>
                            <th>url de la imagen</th>
                            <th>editar</th>
                            <th>eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->modelo}}</td>
                            <td>{{$item->ram}}</td>
                            <td>{{$item->procesador}}</td>
                            <td>{{$item->discoDuro}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->imagen}}</td>
                            <td><a href="{{route('edit', $item->id)}}"class="btn btn-warning">Editar</a></td>
                            <td><a href="{{route('show', $item->id)}}" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection