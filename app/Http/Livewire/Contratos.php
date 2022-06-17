<?php

namespace App\Http\Livewire;

use Livewire\Component;
use APP\Models\Contrato;
use Illuminate\Support\Facades\DB;

class Contratos extends Component
{

    Public $contratos, $numero, $proveedor, $dependencia, $tipodecontrato, $formadepago, $lugarentrega, $plazoentrega, $otrascondiciones, $pdf;
    Public $modal = false;



    public function render()
    {
        $this->contratos = DB::table('contratos')
        ->join('proveedors', 'proveedors.id', '=', 'contratos.proveedor')
        ->join('dependencias', 'dependencias.id', '=', 'contratos.dependencia')
        ->join('tipocontratos', 'tipocontratos.id', '=', 'contratos.tipodecontrato')
        ->select('contratos.*', 'proveedors.nombreproveedor', 'dependencias.nombredependencia','tipocontratos.tipodecontrato')
        ->get();

        return view('livewire.contratos')
                ->extends('layouts.app')
                ->section('content');
    }


    public function crear()
    {
        //dd("test");
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }

        public function limpiarcampos(){
                $this->numero ="";
                $this->proveedor ="";
                $this->dependencia ="";
                $this->tipodecontrato ="";
                $this->formadepago ="";
                $this->lugarentrega ="";
                $this->plazoentrega ="";
                $this->otrascondiciones ="";
                $this->pdf ="";
    }


}
