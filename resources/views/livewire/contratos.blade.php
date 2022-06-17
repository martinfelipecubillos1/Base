


    <div>
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Contratos y Donaciones</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuevo</button>
                                @if($modal)
                                    @include('livewire.crear')
                                @endif



                                    <div class="row" style="overflow-x:auto">
                                        <table class="table-fixed w-full">
                                            <thead>
                                                <tr calss="bg-indigo-600 text-black">
                                                    <th style="color:rgb(0, 0, 0);">Codigo</th>
                                                    <th style="color:rgb(0, 0, 0);">Numero</th>
                                                    <th style="color:rgb(0, 0, 0);">Proveedor</th>
                                                    <th style="color:rgb(0, 0, 0);">Dependencia</th>
                                                    <th style="color:rgb(0, 0, 0);">Tipo de contrato</th>
                                                    <th style="color:rgb(0, 0, 0);">Forma de pago</th>
                                                    <th style="color:rgb(0, 0, 0);">Lugar de entrega</th>
                                                    <th style="color:rgb(0, 0, 0);">Plazo entrega</th>
                                                    <th style="color:rgb(0, 0, 0);">Otras condiciones</th>
                                                    <th style="color:rgb(0, 0, 0);">Documento adjunto</th>
                                                    <th style="color:rgb(0, 0, 0);">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contratos as $Contra)
                                                    <tr>
                                                        <td class="border px-2 py-1">{{ $Contra->id }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->numero }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->nombreproveedor }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->nombredependencia }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->tipodecontrato }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->formadepago }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->lugarentrega }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->plazoentrega }}</td>
                                                        <td class="border px-2 py-1">{{ $Contra->otrascondiciones }}</td>
                                                        <td><a class="btn btn-info"href="Archivos/{{ $Contra->pdf }}"
                                                                target="blank_">Ver documento</a> </td>
                                                        <td>





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
            </div>

</div>
