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

    <div class=" row justify-content-center">

          <div class="card card-nav-tabs" style="width: 800px">

              <div class="card-body">
                 <form method="post" action="{{route('guardarCategoria')}}">
                    @csrf
                    <div class="form-group">
                        <label for="category" class="bmd-label-floating">Categoria</label>
                        <input type="text" class="form-control" id="category" name="name">
                    </div>
                    <button type="submit" class="btn btn-info">Guardar</button>
                 </form>

            </div>
              <div class="card-body">
                  <table class="table" id="tablaproductos">
                      <thead class=" text-primary text-center">
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Opciones</th>
                      </thead>
                      <tbody>
                      @foreach($categorias as $categoria)
                      <tr class="text-center">
                          <td>{{$categoria->id}}</td>
                              <td>{{$categoria->name}}</td>
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
