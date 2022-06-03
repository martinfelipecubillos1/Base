<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use App\Models\cargo;
use App\Models\Dependencia;
use App\Models\Responsable;
use App\Models\responsablespordependencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Responsablespordependencias;

class ResponsablespordependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta de llaves foraneas a la vista
        $responsablespordependencias = DB::table('responsablespordependencias')
            ->join('responsables', 'responsables.id', '=', 'responsablespordependencias.responsable')
            ->join('dependencias', 'dependencias.id', '=', 'responsablespordependencias.dependencia')
            ->join('cargos', 'cargos.id', '=', 'responsables.cargo')
            ->select('responsablespordependencias.*', 'responsables.nombre', 'cargos.nombrecargo', 'dependencias.nombredependencia')
            ->get();
        //  dd($responsablespordependencias);

        // $responsablespordependencias = responsablespordependencia::paginate(5);



        return view('responsablespordependencias.index', compact('responsablespordependencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $dependencias = Dependencia::all();
        $responsables = Responsable::all();
        return view('responsablespordependencias.crear', compact('dependencias', 'responsables'));
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
            'responsable' => 'required',
            'dependencia' => 'required',

        ]);
        // dd($request->all());

        responsablespordependencia::create($request->all());

        return redirect()->route('responsablespordependencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $dependencias = Dependencia::all();
        $responsables = Responsable::all();

        $responsablespordependencia = responsablespordependencia::find($id);

       // dd($responsablespordependencia);
        return view('responsablespordependencias.editar', compact('responsablespordependencia', 'dependencias', 'responsables'));
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
         dd($request->all());
        request()->validate([

            'responsable' => 'required',
            'dependencia' => 'required',
            //        'correo' =>'required|unique:responsables',


        ]);
        //dd($request->all());

        $responsable = responsablespordependencia::find($id);
        $responsable->update($request->all());
        return redirect()->route('responsablespordependencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('responsablespordependencias')->where('id', $id)->delete();

        return redirect()->route('responsablespordependencias.index');
    }
}
