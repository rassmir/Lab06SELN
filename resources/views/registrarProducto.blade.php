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
            <div class="col-md-6">
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
            </div>
        </div>
        <div class="col-md-6">

        </div>
        </div>
    </div>
@endsection
