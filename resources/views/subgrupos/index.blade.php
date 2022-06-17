@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">

            @foreach ($Grupos as $Grupo)
                @if ($Grupo->id == $id)
                    <h3 class="page__heading"> Subgrupos de Elementos {{ $Grupo->nombregrupo }} </h3>
        </div>
        @endif
        @endforeach

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                @foreach ($Subgrupos as $Subgrupo)
                                    <div class="col-md-2 col-xl-3">
                                        <div class="card order-card" style="background:#{{ $Subgrupo->color }}">
                                            <div class="card-block">

                                                <form action="{{ route('subgrupos.destroy', $Subgrupo->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <h5><a class="text-white text-left"
                                                            href="{{ route('elementos.show', $Subgrupo->id) }}">
                                                            {{ $Subgrupo->nombresubgrupo }} </a>
                                                        <br>
                                                        <a class="text-white text-left btn "
                                                            style="background-color:#40CFFF"
                                                            href="{{ route('subgrupos.edit', $Subgrupo->id) }}">
                                                            Crear

                                                        </a> <button type="submit" class="btn text-white"
                                                            style="background-color:#c5005c">Borrar</button>
                                                    </h5>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h5><a class="form-control text-Black btn btn-secondary"
            href="{{ route('grupos.index') }}"> Volver
            </a></h5>
    </section>
@endsection
