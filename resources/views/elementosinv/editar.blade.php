@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Empleados</h3>
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

                            {!! Form::model($elementoinventario, ['method' => 'PATCH', 'route' => ['elementosinv.update', $elementoinventario->id]]) !!}


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">elemento</label>
                                    @foreach ($elementos as $elemento)
                                        @if ($elemento->id == $elementoinventario->elemento)
                                            <input style="visibility:hidden " type="text" name="elemento"
                                                id="elemento" value="{{ $elemento->id }}">
                                                <br>
                                            {{ $elemento->nombreelemento }} </input>
                                        @endif
                                    @endforeach
                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">marcas</label>
                                    <select class="form-control" name="cargo" id="cargo">
                                        @foreach ($marcas as $marca)
                                            @if ($marca->id == $elementoinventario->marca)
                                                <option value="{{ $marca->id }}"> {{ $marca->nombremarca }}</option>
                                            @endif
                                        @endforeach

                                        @foreach ($marcas as $marca)
                                            <option value="{{ $marca->id }}">{{ $marca->nombremarca }}
                                                </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">referencia</label>
                                    <select class="form-control" name="dependencia" id="dependencia">
                                        @foreach ($referencias as $referencia)
                                        @if ($referencia->id == $elementoinventario->referencia)
                                            <option value="{{ $referencia->id }}">{{ $referencia->nombrereferencia }}</option>
                                        @endif
                                    @endforeach

                                        @foreach ($referencias as $referencia)
                                            <option value="{{ $referencia->id }}">{{ $referencia->nombrereferencia }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Unidad</label>
                                    <select class="form-control" name="compania" id="compania">

                                        @foreach ($unidads as $unidad)
                                        @if ($unidad->id == $elementoinventario->unidad)
                                            <option value="{{ $unidad->id }}">{{ $unidad->nombreunidad }}</option>
                                        @endif
                                    @endforeach



                                        @foreach ($unidads as $unidad)
                                            <option value="{{ $unidad->id }}">{{ $unidad->nombreunidad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Placa interna:</label>
                                    <br/>
                                 {!! Form::text('placainterna', null, array('class' => 'form-control')) !!}
                                 <br/>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Placa externa:</label>
                                    <br/>
                                 {!! Form::text('placaexterna', null, array('class' => 'form-control')) !!}
                                 <br/>
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
