@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar dependencia</h3>
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

                        {!! Form::model($dependencia, ['method' => 'PATCH','route' => ['dependencias.update', $dependencia->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">codigo:</label>
                                <option value="{{$dependencia->id}}">{{$dependencia->codigodependencia}}</option>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">nombre:</label>
                                <br/>
                             {!! Form::text('nombredependencia', null, array('class' => 'form-control')) !!}

                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="contenido">Compañia</label>
                                <select class="form-control" name="codigocompania" id="codigocompania">
                                    <option value="0"> seleccione</option>
                                    @foreach ($companias as $compania)
                                        <option value="{{$compania->id}}">{{$compania->nombrecompania}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="contenido">Proveedor</label>
                                <select class="form-control" name="codigoproveedor" id="codigoproveedor">
                                    <option value="0"> seleccione</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option value="{{$proveedor->id}}">{{$proveedor->nombreproveedor}}</option>
                                    @endforeach
                                </select>
                            </div>
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
