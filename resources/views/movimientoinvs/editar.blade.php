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

                            {!! Form::model($movimientoinv, ['method' => 'PATCH', 'route' => ['movimientoinvs.update', $movimientoinv->id]]) !!}


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Empleado</label>
                                    <select class="form-control" name="responsable" id="responsable">
                                        <option value="{{ $movimientoinv->responsable}}">

                                            @foreach ($responsables as $responsable)
                                                @if ($movimientoinv->responsable == $responsable->id)
                                                    {{ $responsable->nombre }}
                                                @endif
                                            @endforeach

                                        </option>

                                        @foreach ($responsablespordependencias as $responsablespordependencia)
                                            @foreach ($responsables as $responsable)
                                                @if ($responsablespordependencia->id == $responsable->id)
                                                    <option value="{{ $responsablespordependencia->id }}">
                                                        {{ $responsable->nombre }}
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
                                        <option value="{{ $movimientoinv->elemento}}">

                                            @foreach ($elementos as $elemento)
                                            @if ($movimientoinv->elemento == $elemento->id)
                                                {{ $elemento->nombreelemento }}
                                            @endif
                                        @endforeach

                                        </option>

                                        @foreach ($elementoinventarios as $elementoinventario)
                                            @foreach ($elementos as $elemento)
                                                @if ($elementoinventario->id == $elemento->id)
                                                    <option value="{{ $elementoinventario->id }}">
                                                        {{ $elemento->nombreelemento }}
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
                                        <option value= {{ $movimientoinv->estado}}>

                                            @foreach ($estados as $estado)
                                            @if ($movimientoinv->estado == $estado->id)
                                                {{ $estado->nombreestado }}
                                            @endif
                                        @endforeach

                                        </option>
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
                                        <option value= {{ $movimientoinv->proveedor}}>

                                            @foreach ($proveedors as $proveedor)
                                            @if ($movimientoinv->proveedor == $proveedor->id)
                                                {{ $proveedor->nombreproveedor }}
                                            @endif
                                        @endforeach

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
                                        <option value= {{ $movimientoinv->tipomovimiento}}>

                                            @foreach ($movimientos as $movimiento)
                                            @if ($movimientoinv->tipomovimiento == $movimiento->id)
                                                {{ $movimiento->nombremovimiento }}
                                            @endif
                                        @endforeach



                                        @foreach ($movimientos as $movimiento)
                                            <option value="{{ $movimiento->id }}">
                                                {{ $movimiento->nombremovimiento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contenido">Realiza el movimiento</label>
                                        <option value= {{ $movimientoinv->usuario}}>

                                            @foreach ($users as $user)
                                            @if ($movimientoinv->usuario == $user->id)
                                                {{ $user->name }}
                                            @endif
                                        @endforeach
                                </div>
                            </div>

                            <input  name="actualiza" hidden id="actualiza"  value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">


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
