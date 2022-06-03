@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Empleado</h3>
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

                    <form action="{{ route('responsablespordependencias.store') }}" method="POST">
                        @csrf
                        <div class="row">


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Responsable</label>
                                    <select class="form-control" name="responsable" id="responsable">
                                        <option value=""> Seleccione.</option>
                                        @foreach ($responsables as $responsable)
                                            <option value="{{$responsable->id}}">{{$responsable->nombre}} ({{$responsable->cedula}})</option>
                                            @endforeach
                                    </select>

                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Dependencia</label>
                                    <select class="form-control" name="dependencia" id="dependencia">
                                        <option value=""> Seleccione.</option>
                                        @foreach ($dependencias as $dependencia)
                                            <option value="{{$dependencia->id}}">{{$dependencia->nombredependencia}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>








<br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
