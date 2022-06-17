@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            @foreach ($Grupos as $Grupo)
                @if ($Grupo->id == $id)
                    <h3 class="page__heading">Crear Subgrupos de Elementos {{ $Grupo->nombregrupo }} </h3>
                @endif
            @endforeach
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ route('subgrupos.store') }}" method="POST">
                                @csrf

                                <select hidden name="codigogrupo" id="codigogrupo">
                                    @foreach ($Grupos as $Grupo)
                                        @if ($Grupo->id == $id)
                                            <option value="{{ $Grupo->id }}">
                                            </option>
                                        @endif
                                    @endforeach
                                </select>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-floating">
                                            <label for="contenido">Nombre</label>
                                            <input type="text" name="nombresubgrupo" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="contenido">Color</label>
                                            <select class="form-control" name="color" id="color">
                                                <option value=""> Seleccione.</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->color }}">{{ $color->nombrecolor }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-primary">Guardar</button>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
