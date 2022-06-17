@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Elemento</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6">
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

                            <form action="{{ route('contratos.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Numero de Contrato</label>
                                        <input type="text" name="numero" class="form-control">
                                    </div>
                                </div>





                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="contenido">Proveedores</label>
                                        <select class="form-control" name="proveedor" id="proveedor">
                                            <option value=""> Seleccione.</option>
                                            @foreach ($provedores as $provedore)
                                                <option value="{{ $provedore->id }}">{{ $provedore->nombreproveedor }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="contenido">Dependencias</label>
                                        <select class="form-control" name="dependencia" id="dependencia">
                                            <option value=""> Seleccione.</option>
                                            @foreach ($dependencias as $dependencia)
                                                <option value="{{ $dependencia->id }}">{{ $dependencia->nombredependencia }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="contenido">Tipo de contrato</label>
                                        <select class="form-control" name="tipodecontrato" id="tipodecontrato">
                                            <option value=""> Seleccione.</option>
                                            @foreach ($tiposdecontratos as $tiposdecontrato)
                                                <option value="{{ $tiposdecontrato->id }}">
                                                    {{ $tiposdecontrato->tipodecontrato }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Forma de pago</label>
                                        <br>
                                        <textarea type="text" rows="3" cols="55" name="formadepago">
                                            </textarea>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Lugar de entrega</label>
                                        <br>
                                        <textarea type="text" rows="3" cols="55" name="lugarentrega">
                                            </textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Plazo para la entrega</label>
                                        <br>
                                        <textarea type="text" rows="3" cols="55" name="plazoentrega">
                                            </textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Otras condiciones</label>
                                        <br>
                                        <textarea type="text" rows="3" cols="55" name="otrascondiciones">
                                            </textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Adjunar pdf</label>
                                        <input type="file" name="pdf" class="form-control">

                                    </div>
                                </div>

                        </div>
                    </div>




                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
