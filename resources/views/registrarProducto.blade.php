@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-nav-tabs" style="width: 800px">
                <div class="card-body">
                    <form method="post" action="{{'productoSave'}}" >
                        @csrf
                        <div class="form-group">
                            <label for="category" class="bmd-label-floating">Nombre</label>
                            <input type="text" class="form-control" id="category" name="name">
                        </div>
                        <div class="form-group">
                            <label for="deport">Categoria</label>
                            <select class="form-control" data-style="btn btn-link" id="deport" name="categorias_id">
                                <option selected disabled>Seleccione la categoria</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price" class="bmd-label-floating">Precio</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                        <div class="form-group">
                            <label for="stock" class="bmd-label-floating">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock">
                        </div>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>


                <div class="card-body">
                    <table class="table" id="tablaproductos">
                        <thead class=" text-primary text-center">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Opciones</th>
                        </thead>
                        <tbody>
                        @foreach($productos as $producto)
                            <tr class="text-center">
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->name}}</td>
                                <td>{{$producto->price}}</td>
                                <td>{{$producto->categorias->name}}</td>
                                <td>{{$producto->stock}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editarproducto">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarproducto">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        </div>
    </div>
@endsection
