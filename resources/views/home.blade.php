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
                        <input type="text" class="form-control" id="category" name="name" required>
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
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarproducto{{$categoria->id}}">
                                  <i class="material-icons">close</i>
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="eliminarproducto{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que deseas eliminar esta categoria?</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                              <button type="button" class="btn btn-danger"><a href="{{url('/eliminar-categoria/'.$categoria->id)}}">Eliminar</a></button>
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
