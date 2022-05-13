@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Proveedores </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-unidad')
                        <a class="btn btn-warning" href="{{ route('proveedores.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Codigo</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Contacto</th>
                                    <th style="color:#fff;">acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($Proveedores as $Proveedor)
                            <tr>
                                <td style="display: none;">{{ $Proveedor->id }}</td>
                                <td>{{ $Proveedor->codigoproveedor }}</td>
                                <td>{{ $Proveedor->nombreproveedor }}</td>
                                <td>{{ $Proveedor->contacto }}</td>
                                <td>

                                    <form action="{{ route('proveedores.destroy',$Proveedor->id) }}" method="POST">
                                        @can('editar-Compania')
                                        <a class="btn btn-info" href="{{ route('proveedores.edit', $Proveedor->id) }}">Editar</a>
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
                            {!! $Proveedores->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
