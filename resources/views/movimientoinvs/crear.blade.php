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

                            <form action="{{ route('movimientoinvs.store') }}" method="POST">
                                @csrf
                                <div class="row">



                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="contenido">Empleado</label>
                                            <select class="form-control" name="responsable" id="responsable">
                                                <option value=""> Seleccione.</option>
                                                @foreach ($responsablespordependencias as $responsablespordependencia)
                                                    @foreach ($responsables as $responsable)

                                                        @if ($responsablespordependencia->id == $responsable->id )
                                                            <option value="{{ $responsablespordependencia->id }}">{{ $responsable->nombre }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="contenido">elementos</label>
                                            <select class="form-control" name="elemento" id="elemento">
                                                <option value=""> Seleccione.</option>

                                                @foreach ($elementoinventarios as $elementoinventario)

                                                @foreach ($elementos as $elemento)

                                                @if ($elementoinventario->id == $elemento->id )
                                                <option value="{{ $elementoinventario->id }}">{{ $elemento->nombreelemento }}
                                                </option>
                                                @endif
                                                @endforeach
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="contenido">Estado</label>
                                            <select class="form-control" name="estado" id="estado">
                                                <option value=""> Seleccione.</option>
                                                @foreach ($estados as $estado)
                                                    <option value="{{ $estado->id }}">{{ $estado->nombreestado }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="contenido">proveedor</label>
                                            <select class="form-control" name="proveedor" id="proveedor">
                                                <option value=""> Seleccione.</option>
                                                @foreach ($proveedors as $proveedor)
                                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombreproveedor }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>




                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="contenido">movimiento</label>
                                            <select class="form-control" name="tipomovimiento" id="tipomovimiento">
                                                <option value=""> Seleccione.</option>
                                                @foreach ($movimientos as $movimiento)
                                                    <option value="{{ $movimiento->id }}">
                                                        {{ $movimiento->nombremovimiento }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                            <input  name="usuario" hidden id="usuario" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">



                                            <input  name="actualiza" hidden id="actualiza"  value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">




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
