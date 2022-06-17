@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar responsables</h3>
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

                        {!! Form::model($responsable, ['method' => 'PATCH','route' => ['responsables.update', $responsable->id]]) !!}

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">codigo:</label>
                                <option value="{{$responsable->id}}">{{$responsable->cedula}}</option>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">nombre:</label>
                                <br/>
                             {!! Form::text('nombre', null, array('class' => 'form-control')) !!}
                             <br/>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="contenido">Cargo</label>
                                <select class="form-control" name="cargo" id="cargo">
                                    @foreach ($cargos as $cargo)
                                        @if ($cargo->id == $responsable->cargo)
                                            <option value="{{ $cargo->id }}"> {{ $cargo->nombrecargo }}</option>
                                     @endif
                                    @endforeach

                                    @foreach ($cargos as $cargo)
                                    @if ($cargo->id == $responsable->cargo)
                                    @else
                                    <option value="{{ $cargo->id }}"> {{ $cargo->nombrecargo }}</option>

                                       @endif>
                                        @endforeach
                                </select>
                            </div>
                        </div>






                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Correo:</label>
                                <br/>
                             {!! Form::text('correo', null, array('class' => 'form-control')) !!}
                             <br/>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Numero:</label>
                                <br/>
                             {!! Form::text('numero', null, array('class' => 'form-control')) !!}
                             <br/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>

                    </div>
                    {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
