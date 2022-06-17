@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">

@foreach ( $Subgrupos as $subgrupo )

@if ($subgrupo->id == $nom)
<h3 class="page__heading"> Elementos  {{$subgrupo->nombresubgrupo}} </h3>
@endif

@endforeach

        </div>

        <div class="section-body">
            <h5><a class=" text-Black btn btn-secondary"
                href="{{ route('grupos.index') }}"> Volver
                </a></h5>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Codigo</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Marca</th>
                                    <th style="color:#fff;">Descripcion</th>
                                    <th style="color:#fff;">acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($Elementos as $Elemento)
                            <tr>
                                <td style="display: none;">{{ $Elemento->id }}</td>
                                <td>{{ $Elemento->idg}}{{ $Elemento->codigosubgrupo}}{{ $Elemento->id}}</td>
                                <td>{{ $Elemento->nombreelemento }}</td>
                                <td>{{ $Elemento->nombremarca }}</td>
                                <td>{{ $Elemento->descripcion }}</td>
                                <td>

                                    <form action="{{ route('elementos.destroy',$Elemento->id) }}" method="POST">
                                        @can('editar-Compania')
                                        <a class="btn btn-info" href="{{ route('elementos.edit', $Elemento->id) }}">Editar</a>
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
                            {!! $Elementos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
