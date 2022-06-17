<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Dependencia;
use App\Models\Proveedor;
use App\Models\Tipocontrato;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Contras = DB::table('contratos')
        ->join('proveedors', 'proveedors.id', '=', 'contratos.proveedor')
        ->join('dependencias', 'dependencias.id', '=', 'contratos.dependencia')
        ->join('tipocontratos', 'tipocontratos.id', '=', 'contratos.tipodecontrato')
        ->select('contratos.*', 'proveedors.nombreproveedor', 'dependencias.nombredependencia','tipocontratos.tipodecontrato')
        ->paginate(5);

        $contratos = Contrato::all();


     return view('contratos.index', compact('Contras','contratos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$provedores = Proveedor::all();
$dependencias = Dependencia::all();
$tiposdecontratos = Tipocontrato::all();

        return view('contratos.crear',compact('provedores','dependencias','tiposdecontratos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // dd($request->all());

   try{
DB::beginTransaction();
$cont=new Contrato;
$cont->numero=$request->get('numero');
$cont->proveedor=$request->get('proveedor');
$cont->dependencia=$request->get('dependencia');
$cont->tipodecontrato=$request->get('tipodecontrato');
$cont->formadepago=$request->get('formadepago');
$cont->lugarentrega=$request->get('lugarentrega');
$cont->plazoentrega=$request->get('plazoentrega');
$cont->otrascondiciones=$request->get('otrascondiciones');
if($request->hasFile('pdf')){
    $archivo=$request->file('pdf');
    $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
    $cont->pdf=$archivo->getClientOriginalName();
}
$cont->save();

DB::commit();
   }catch(Exception $e){
DB::rollback();
   }

   return redirect()->route('contratos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('contratos')->where('id', $id)->delete();
   return redirect()->route('contratos.index');
    }
}
