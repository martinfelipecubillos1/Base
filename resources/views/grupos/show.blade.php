@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">

@foreach ( $Grupos as $grupo )

@if ($grupo->id == $nom)
<h3 class="page__heading"> Elementos  {{$grupo->nombregrupo}} </h3>
@endif

@endforeach






        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-unidad')
                        <a class="btn btn-warning" href="{{ route('elementos.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Codigo</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Subgrupo</th>
                                    <th style="color:#fff;">grupo</th>
                                    <th style="color:#fff;">acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($Elementos as $Elemento)
                            <tr>
                                <td style="display: none;">{{ $Elemento->id }}</td>
                                <td>{{ $Elemento->idg}}{{ $Elemento->codigosubgrupo}}{{ $Elemento->id}}</td>
                                <td>{{ $Elemento->nombreelemento }}</td>
                                <td>{{ $Elemento->nombresubgrupo }}</td>
                                <td>{{ $Elemento->nombregrupo }}</td>
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







        @can('crear-unidad')
        <div class="section-body" >
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="page__heading"> Sup Grupo De Elementos   <a class="btn btn-warning" href="{{ route('elementos.create') }}">Nuevo</a></h3>




                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Codigo</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">grupo</th>
                              </thead>
                              <tbody>
                            @foreach ($Subgrupoelementos as $Subgrupoelemento)
                            <tr>
                                <td style="display: none;">{{ $Elemento->id }}</td>
                                <td>{{ $Subgrupoelemento->idg}}{{ $Subgrupoelemento->id}}</td>
                                <td>{{ $Subgrupoelemento->nombresubgrupo }}</td>
                                <td>{{ $Elemento->nombregrupo }}</td>
                                <td>


                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $Subgrupoelementos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endcan

        <div class="section-body">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="page__heading"> liveire  </h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>








    </section>
@endsection
