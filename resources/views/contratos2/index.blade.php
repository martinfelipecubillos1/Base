@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Contratos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" >

                                @can('crear-unidad')
                                <a class="btn btn-warning" href="{{ route('contratos.create') }}">Nuevo</a>
                                @endcan



                                    <div class="row" style="overflow-x:auto">
                                <table class="table">
                                    <thead style="background-color:#6777ef">
                                        <th style="color:#fff;">Codigo</th>
                                        <th style="color:#fff;">Numero</th>
                                        <th style="color:#fff;">Proveedor</th>
                                        <th style="color:#fff;">Dependencia</th>
                                        <th style="color:#fff;">Tipo de contrato</th>
                                        <th style="color:#fff;">Forma de pago</th>
                                        <th style="color:#fff;">Lugar de entrega</th>
                                        <th style="color:#fff;">Plazo entrega</th>
                                        <th style="color:#fff;">Otras condiciones</th>
                                        <th style="color:#fff;">Documento adjunto</th>
                                        <th style="color:#fff;">Acciones</th>
                                  </thead>
                                  <tbody>
                                @foreach ($Contras as $Contra)
                                <tr>
                                    <td >{{ $Contra->id }}</td>
                                    <td>{{ $Contra->numero }}</td>
                                    <td>{{ $Contra->nombreproveedor }}</td>
                                    <td>{{ $Contra->nombredependencia }}</td>
                                    <td>{{ $Contra->tipodecontrato }}</td>
                                    <td>{{ $Contra->formadepago }}</td>
                                    <td>{{ $Contra->lugarentrega }}</td>
                                    <td>{{ $Contra->plazoentrega }}</td>
                                    <td>{{ $Contra->otrascondiciones }}</td>
                                    <td><a class="btn btn-success"href="Archivos/{{$Contra->pdf}}" target="blank_">Ver documento</a>  </td>
                                    <td>
                                        <form action="{{ route('contratos.destroy',$Contra->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-dependencia')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>

                            <div class="pagination justify-content-end">
                                {!! $Contras->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
