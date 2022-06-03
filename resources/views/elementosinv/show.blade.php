@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Elementos del inventario </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">




                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">

                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Marca</th>
                                    <th style="color:#fff;">Referencia</th>
                                    <th style="color:#fff;">Placa interna</th>
                                    <th style="color:#fff;">Placa externa</th>
                                    <th style="color:#fff;">unidad</th>
                                    <th style="color:#fff;">Fecha ingreso</th>
                                    @can('editar-rol')
                                    <th style="color:#fff;">acciones</th>
                                    @endcan
                                </thead>
                                <tbody>
                                    @foreach ($elementoinventarios as $elementoinventario)
                                        <tr>
                                            <td style="display: none;">{{ $elementoinventario->id }}</td>

                                            <td>{{ $elementoinventario->nombreelemento }}</td>
                                            <td>{{ $elementoinventario->nombremarca }}</td>
                                            <td>{{ $elementoinventario->nombrereferencia }}</td>
                                            <td>{{ $elementoinventario->placainterna }}</td>
                                            <td>{{ $elementoinventario->placaexterna }}</td>
                                            <td>{{ $elementoinventario->nombreunidad }}</td>
                                            <td>{{ $elementoinventario->created_at }}</td>


                                            <td>
                                                <form action="{{ route('elementosinv.destroy', $elementoinventario->id) }}"
                                                    method="POST">




                                                    @can('editar-dependencia')
                                                        <a class="btn btn-info"
                                                            href="{{ route('elementosinv.edit', $elementoinventario->id) }}">Editar</a>
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

                    <div class="col-lg-3">
                        <div class="card">

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="color:#fff;">Codigo</th>
                                        <th style="color:#fff;">Nombre</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($elementos as $elemento)
                                            <tr>
                                                <td style="display: none;">{{ $elemento->id }}</td>
                                                <td>{{ $elemento->id }}</td>
                                                <td>{{ $elemento->nombreelemento }}</td>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>
@endsection
