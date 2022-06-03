@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Responsables </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-unidad')
                        <a class="btn btn-warning" href="{{ route('responsables.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Cedula</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Cargo</th>
                                    <th style="color:#fff;">Correo</th>
                                    <th style="color:#fff;">Numero</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($responsables as $responsable)
                            <tr>
                                <td style="display: none;">{{ $responsable->id }}</td>
                                <td>{{ $responsable->cedula }}</td>
                                <td>{{ $responsable->nombre }}</td>
                                <td>{{ $responsable->nombrecargo }}</td>
                                <td>{{ $responsable->correo }}</td>
                                <td>{{ $responsable->numero }}</td>
                                <td>

                                    <form action="{{ route('responsables.destroy',$responsable->id) }}" method="POST">
                                        @can('editar-Compania')
                                        <a class="btn btn-info" href="{{ route('responsables.edit', $responsable->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-Compania')
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
