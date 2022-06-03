@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Elemento de inventario</h3>
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

                    <form action="{{ route('elementosinv.store') }}" method="POST">
                        @csrf
                        <div class="row">


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">elementos</label>
                                    <select class="form-control" name="elemento" id="elemento">
                                        <option value=""> Seleccione.</option>
                                        @foreach ($elementos as $elemento)
                                            <option value="{{$elemento->id}}">{{$elemento->nombreelemento}}</option>
                                            @endforeach
                                    </select>

                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">marcas</label>
                                    <select class="form-control" name="marca" id="marca">
                                        <option value=""> Seleccione.</option>
                                        @foreach ($marcas as $marca)
                                            <option value="{{$marca->id}}">{{$marca->nombremarca}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">referencias</label>
                                    <select class="form-control" name="referencia" id="referencia">
                                        <option value=""> Seleccione.</option>
                                        @foreach ($referencias as $referencia)
                                            <option value="{{$referencia->id}}">{{$referencia->nombrereferencia}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>




                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">unidades</label>
                                    <select class="form-control" name="unidad" id="unidad">
                                        <option value=""> Seleccione.</option>
                                        @foreach ($unidads as $unidad)
                                            <option value="{{$unidad->id}}">{{$unidad->nombreunidad}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Placa interna</label>
                                    <input  class="form-control" type="text" name="placainterna">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Placa externa</label>
                                    <input class="form-control" type="text" name="placaexterna">
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
