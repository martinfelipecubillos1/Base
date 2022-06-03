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

                            {!! Form::model($responsablespordependencia, ['method' => 'PATCH', 'route' => ['responsablespordependencias.update', $responsablespordependencia->id]]) !!}


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Responsable:</label>
                                    @foreach ($responsables as $responsable)
                                        @if ($responsable->id == $responsablespordependencia->responsable)
                                            <input style="visibility:hidden " type="text" name="responsable"
                                                id="responsable" value="{{ $responsable->id }}"> <br>
                                            {{ $responsable->nombre }} </input>
                                        @endif
                                    @endforeach
                                </div>
                            </div>




                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Dependencia</label>
                                    <select class="form-control" name="dependencia" id="dependencia">
                                        @foreach ($dependencias as $dependencia)
                                        @if ($dependencia->id == $responsablespordependencia->dependencia)
                                            <option value="{{ $dependencia->id }}">{{ $dependencia->nombredependencia }}</option>
                                        @endif
                                    @endforeach
                                        @foreach ($dependencias as $dependencia)
                                        @if ($dependencia->id == $responsablespordependencia->dependencia)
                                    @else
                                    <option value="{{ $dependencia->id }}">{{ $dependencia->nombredependencia }}
                                       </option>
                                       @endif>
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
