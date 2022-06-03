@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Elementos del inventario</h3>
        </div>

        @can('crear-rol')
        <a class="form-control btn btn-success" href="{{ route('elementosinv.create') }}">Nuevo</a>
    @endcan

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                <div class="row">
                                    @php
                                    use App\Models\Elementoinventario;
                                    @endphp

                                    @foreach ($elementos as $elemento)

                                    <div class="col-md-3 col-xl-3">
                                    <div class="card order-card" style="background:#{{$elemento->color}}" >
                                            <div class="card-block">
                                            <h5>{{$elemento->nombreelemento}}</h5>
                                            @php
                                            $count = Elementoinventario::where('elemento', $elemento->id )->count();
                                           @endphp
                                                <h2 class="text-right"><i class="fa fa-user f-left"></i>{{$count}}<span></span></h2>

                                                <p class="m-b-0 text-right"><a class="text-white" href="{{ route('elementosinv.show', $elemento->id) }}">Ver más</a></p>

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

