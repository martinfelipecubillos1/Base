<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use App\Models\Elementoinventario;
use App\Models\Marca;
use App\Models\Referencia;
use App\Models\Responsable;
use App\Models\Unidad;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class ElementoinventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elementos = Elemento::all();

        return view('elementosinv.index', compact('elementos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elementos = Elemento::all();
        $marcas = Marca::all();
        $referencias = Referencia::all();
        $unidads = Unidad::all();
        return view('elementosinv.crear', compact('elementos','marcas','referencias','unidads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'elemento' =>'required',
            'marca' =>'required',
            'referencia' =>'required',
            'unidad' =>'required',
            'placainterna' =>'required',
            'placaexterna' =>'required',

            ]);
           // dd($request->all());

           Elementoinventario::create($request->all());

    return redirect()->route('elementosinv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $elementoinventarios = DB::table('elementoinventarios')
        ->join('elementos', 'elementos.id', '=', 'elementoinventarios.elemento')
        ->join('marcas', 'marcas.id', '=', 'elementoinventarios.marca')
        ->join('referencias', 'referencias.id', '=', 'elementoinventarios.referencia')
        ->join('unidads', 'unidads.id', '=', 'elementoinventarios.unidad')
        ->where('elemento', '=', $id)
        ->select('elementoinventarios.*', 'elementos.nombreelemento', 'marcas.nombremarca', 'referencias.nombrereferencia', 'unidads.nombreunidad')
        ->get();
      //  dd($responsablespordependencias);

       // $responsablespordependencias = responsablespordependencia::paginate(5);

       $elementos = Elemento::all();

       return view('elementosinv.show', compact('elementoinventarios','elementos' ));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $elementos = Elemento::all();
        $marcas = Marca::all();
        $referencias = Referencia::all();
        $unidads = Unidad::all();

        $elementoinventario = Elementoinventario::find($id);

      return view('elementosinv.editar', compact('elementoinventario','elementos','marcas','referencias','unidads'));
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
    // dd($request->all());
        request()->validate([
            'cargo' =>'required',
            'dependencia' =>'required',
            'compania' =>'required',
      //        'correo' =>'required|unique:responsables',
      'placainterna' =>'required',
      'placaexterna' =>'required',

            ]);
            //dd($request->all());

           $responsable = Elementoinventario::find($id);
    $responsable->update($request->all());
    return redirect()->route('elementosinv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('elementoinventarios')->where('id', $id)->delete();

        return redirect()->route('elementosinv.index');
    }
}
