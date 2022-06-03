<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use App\Models\Compania;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $Dependencias = DB::table('dependencias')
            ->join('companias', 'companias.id', '=', 'dependencias.compania')
            ->select('dependencias.*', 'companias.nombrecompania',)
            ->get();
        return view('dependencias.index', compact('Dependencias'));
    }



    public function create()
    {
        $companias = Compania::all();
        //$codigocompania = Compania::pluck('nombrecompania','id')->all();
        return view('dependencias.crear', compact('companias'));
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
            'nombredependencia' => 'required',
            'compania' => 'required',
        ]);

        //  $query = $request->all();
        // dd($request->all());
        Dependencia::create($request->all());
        //return response()->json($query);
        return redirect()->route('dependencias.index');
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
        $dependencia = Dependencia::find($id);
        $companias = Compania::all();
        return view('dependencias.editar', compact('dependencia', 'companias'));
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
        request()->validate([
            // 'codigodependencia' => 'required',
            'nombredependencia' => 'required',
            'compania' => 'required',
        ]);
        //   dd($request->all());

        $compania = Dependencia::find($id);
        $compania->update($request->all());
        return redirect()->route('dependencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('dependencias')->where('id', $id)->delete();

        return redirect()->route('dependencias.index');
    }
}
