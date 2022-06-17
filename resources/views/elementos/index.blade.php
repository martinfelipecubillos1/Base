@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Grupos de Elementos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">




                                @foreach ($Grupos as $Grupo)
                                    <div class="col-md-2 col-xl-3">
                                        <div class="card order-card" style="background:#{{ $Grupo->color }}">
                                            <div class="card-block">

                                                <a class="text-white"
                                                    href="{{ route('elementos.show', $Grupo->id) }}">
                                                  <h5>{{ $Grupo->nombregrupo }}</h5>
                                                </a>

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
