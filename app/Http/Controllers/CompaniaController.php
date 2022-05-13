<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Companias = Compania::paginate(5);
        return view('companias.index', compact('Companias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companias.crear');
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
            'codigocompania' => 'required|unique:companias',
            'nombrecompania' =>'required',
            'localizacion' =>'required',
            ]);
            if(request('codigocompania'))
            Compania::create($request->all());

    return redirect()->route('companias.index');
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
        $compania = Compania::find($id);
        return view('companias.editar', compact('compania'));
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
            //'codigocompania' => 'required',
            'nombrecompania' =>'required',
            'localizacion' =>'required',

            ]);
            $cambio = $request->all();
            $compania = Compania::find($id);
            $compania->update($request->all());
    return redirect()->route('companias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('companias')->where('id', $id)->delete();

        return redirect()->route('companias.index');
    }
}
