@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Movimientos del inventario </h3>
        </div>
        @can('crear-rol')
        <a class="btn btn-warning" href="{{ route('movimientoinvs.create') }}">Nuevo</a>
        @endcan
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">




                            <table class="table table-sm  ">
                                <thead style="background-color:#6777ef">

                                    <th style="color:#fff;">Empleado</th>
                                    <th style="color:#fff;">elemento</th>
                                    <th style="color:#fff;">estado</th>
                                    <th style="color:#fff;">provedor</th>
                                    <th style="color:#fff;">tipoovimietno</th>
                                    <th style="color:#fff;">Responsable del movimiento</th>
                                    <th style="color:#fff;">Fecha del movimiento</th>
                                    <th style="color:#fff;">Actualización del movimiento</th>
                                    <th style="color:#fff;">Actualiza</th>
                                    @can('editar-rol')
                                        <th style="color:#fff;">acciones</th>
                                    @endcan
                                </thead>
                                <tbody>
                                    @foreach ($Movimientoinvs as $Movimientoinv)
                                        <tr>
                                            <td style="display: none;">{{ $Movimientoinv->id }}</td>
                                            <td>{{ $Movimientoinv->nombre }}</td>
                                            <td>{{ $Movimientoinv->nombreelemento }}</td>
                                            <td>{{ $Movimientoinv->nombreestado }}</td>
                                            <td>{{ $Movimientoinv->nombreproveedor }}</td>
                                            <td>{{ $Movimientoinv->nombremovimiento }}</td>
                                            <td>{{ $Movimientoinv->nombreCrea }}</td>
                                            <td>{{ $Movimientoinv->created_at }}</td>
                                            <td>{{ $Movimientoinv->updated_at }}</td>
                                            <td>{{ $Movimientoinv->nombreActualiza }}</td>
                                            <td>
                                                <form action="{{ route('movimientoinvs.destroy', $Movimientoinv->id) }}"
                                                    method="POST">
                                                    @can('editar-rol')
                                                        <a class="btn btn-info"
                                                            href="{{ route('movimientoinvs.edit', $Movimientoinv->id) }}">Editar</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-rol')
                                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                                    @endcan


                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Ubicamos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $Movimientoinvs->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
