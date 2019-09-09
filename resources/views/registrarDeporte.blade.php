@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-nav-tabs" style="width: 800px">
                <div class="card-body">
                    <form method="post" action="#" >
                        <div class="form-group">
                            <label for="deport">Deporte</label>
                            <select class="form-control" data-style="btn btn-link" id="deport">
                                <option>1</option>
                            </select>
                        </div>
                        <div class="form-group form-file-upload form-file-multiple">
                            <input type="file" multiple="" class="inputFileHidden">
                            <div class="input-group">
                                <input type="text" class="form-control inputFileVisible" placeholder="Campo de juego">
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-fab btn-round btn-primary">
                                    <i class="material-icons">attach_file</i>
                                </button>
                            </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="bmd-label-floating">Descripción</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="history" class="bmd-label-floating">Historia</label>
                            <textarea class="form-control" id="history" rows="8" name="history"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>


                </div>
            </div>


        </div>
    </div>
@endsection
