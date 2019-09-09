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
                <form method="post" action="{{route('guardarDeporte')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="deport" class="bmd-label-floating" >Deporte</label>
                        <input type="text" class="form-control" id="deport" name="name">
                    </div>
                    <div class="form-group form-file-upload form-file-multiple">
                        <input type="file" multiple="" class="inputFileHidden">
                        <div class="input-group">
                            <input type="text" class="form-control inputFileVisible" placeholder="Campo de juego" name="img">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-fab btn-round btn-primary">
                                    <i class="material-icons">attach_file</i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Guardar</button>
                </form>


            </div>
        </div>


    </div>
</div>
@endsection
