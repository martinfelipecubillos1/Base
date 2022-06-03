<?php

namespace App\Http\Controllers;

use App\Models\Referencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Referencias = Referencia::paginate(5);
       return view('referencias.index', compact('Referencias'));
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referencias.crear');
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
            'codigoreferencia' => 'required|unique:referencias',
            'nombrereferencia' =>'required',
            ]);
            if(request('codigoreferencia'))
            Referencia::create($request->all());

    return redirect()->route('referencias.index');
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
        $referencia = Referencia::find($id);
        return view('referencias.editar', compact('referencia'));
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
         //  'codigomarca' => 'required|unique:marcas',
         'nombrereferencia' =>'required',

            ]);
            $cambio = $request->all();
            $compania = Referencia::find($id);
            $compania->update($request->all());

    return redirect()->route('referencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('referencias')->where('id', $id)->delete();

        return redirect()->route('referencias.index');
    }
}
