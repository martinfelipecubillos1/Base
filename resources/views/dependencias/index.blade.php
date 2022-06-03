@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Dependencias </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            @can('crear-unidad')
                                <a class="btn btn-warning" href="{{ route('dependencias.create') }}">Nuevo</a>
                            @endcan

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Codigo</th>
                                    <th style="color:#fff;">Nombre Dependencia</th>
                                    <th style="color:#fff;">Compañia</th>

                                    <th style="color:#fff;">acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($Dependencias as $Dependencia)
                                        <tr>
                                            <td style="display: none;">{{ $Dependencia->id }}</td>
                                            <td>{{ $Dependencia->id }}</td>
                                            <td>{{ $Dependencia->nombredependencia }}</td>
                                            <td>{{ $Dependencia->nombrecompania }}</td>
                                            <td>
                                                <form action="{{ route('dependencias.destroy', $Dependencia->id) }}"
                                                    method="POST">
                                                    @can('editar-dependencia')
                                                        <a class="btn btn-info"
                                                            href="{{ route('dependencias.edit', $Dependencia->id) }}">Editar</a>
                                                    @endcan

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

                            <!-- Ubicamos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
