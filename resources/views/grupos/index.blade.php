@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Grupos de Elementos</h3>
        </div>

        @can('crear-rol')
            <a class="form-control btn btn-success" href="{{ route('grupos.create') }}">Nuevo</a>
        @endcan

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">




                                @foreach ($Grupos as $grupo)
                                    <div class="col-md-2 col-xl-3">
                                        <div class="card order-card" style="background:#{{ $grupo->color }}">
                                            <div class="card-block">

                                                <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <h5><a class="text-white text-left"
                                                            href="{{ route('subgrupos.show', $grupo->id) }}">
                                                            {{ $grupo->nombregrupo }}</a>
                                                        <br>
                                                        <a class="text-white text-left btn "
                                                            style="background-color:#40CFFF"
                                                            href="{{ route('grupos.edit', $grupo->id) }}">
                                                            Crear


                                                        </a> <button type="submit" class="btn text-white"
                                                            style="background-color:#c5005c">Borrar</button>
                                                    </h5>



                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
