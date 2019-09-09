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
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editarproducto{{$producto->id}}">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editarproducto{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content ">
                                                <div class="modal-header dark-edition">
                                                    <h5 class="modal-title text-info" id="exampleModalLabel">Editar</h5>
                                                    <button type="button" class="close text-info" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left dark-edition">
                                                    <form method="post" action="{{route('actualizar.producto',['id'=>$producto->id])}}" >
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="category" class="bmd-label-floating">Nombre</label>
                                                            <input type="text" class="form-control" id="category" name="name" value="{{$producto->name}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="deport">Categoria</label>
                                                            <select class="form-control" data-style="btn btn-link" id="deport" name="categorias_id">
                                                                <option selected disabled>Seleccione la categoria</option>
                                                                @foreach($categorias as $categoria)
                                                                    <option value="{{$categoria->id}}" @if($categoria->id==$producto->categorias_id) selected='selected' @endif>{{$categoria->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="price" class="bmd-label-floating">Precio</label>
                                                            <input type="number" class="form-control" id="price" name="price" value="{{$producto->price}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stock" class="bmd-label-floating">Stock</label>
                                                            <input type="number" class="form-control" id="stock" name="stock" value="{{$producto->stock}}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-info">Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarproducto{{$producto->id}}">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="eliminarproducto{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content dark-edition">
                                                <div class="modal-header text-info dark-edition">
                                                    <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que deseas eliminar esta categoria?</h5>
                                                    <button type="button" class="close text-info" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-danger"><a href="{{url('/eliminar-producto/'.$producto->id)}}">Eliminar</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
