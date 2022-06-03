@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Empleados </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-unidad')
                        <a class="btn btn-warning" href="{{ route('responsablespordependencias.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">

                                    <th style="color:#fff;">nombre</th>
                                    <th style="color:#fff;">cargo</th>
                                    <th style="color:#fff;">dependencia</th>
                                    @can('editar-rol')
                                    <th style="color:#fff;">acciones</th>
                                    @endcan
                              </thead>
                              <tbody>
                            @foreach ($responsablespordependencias as $responsablespordependencia)
                            <tr>
                                <td style="display: none;">{{ $responsablespordependencia->id }}</td>

                                <td>{{ $responsablespordependencia->nombre}}</td>
                                <td>{{ $responsablespordependencia->nombrecargo}}</td>
                                <td>{{ $responsablespordependencia->nombredependencia }}</td>


                                <td>
                                    <form action="{{ route('responsablespordependencias.destroy',$responsablespordependencia->id) }}" method="POST">
                                        @can('editar-dependencia')
                                        <a class="btn btn-info" href="{{ route('responsablespordependencias.edit', $responsablespordependencia->id) }}">Editar</a>
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
