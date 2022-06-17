@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Elemento</h3>
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

                            {!! Form::model($elemento, ['method' => 'PATCH', 'route' => ['elementos.update', $elemento->id]]) !!}

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">codigo:</label>
                                        <option value="{{ $elemento->id }}">{{ $elemento->id }}</option>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">nombre:</label>
                                        <br />
                                        {!! Form::text('nombreelemento', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="contenido">marcas</label>
                                        <select class="form-control" name="marca" id="marca">
                                            @foreach ($marcas as $marca)
                                                @if ($marca->id == $elemento->marca)
                                                    <option value="{{ $marca->id }}">{{ $marca->nombremarca }}
                                                    </option>
                                                @endif
                                            @endforeach
                                            @foreach ($marcas as $marca)
                                                @if ($marca->id == $elemento->marca)
                                                @else
                                                    <option value="{{ $marca->id }}"> {{ $marca->nombremarca }}
                                                    </option>
                                                @endif>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Descripcion:</label>
                                        <br />

                                          <label for="Descripcion" class="form-label"></label>
                                          <textarea name="descripcion" id="desripcion" rows="10" cols="130">{{$elemento->descripcion}}</textarea>
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
