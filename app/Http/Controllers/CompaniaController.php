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


    public function create()
    {
        return view('companias.crear');
    }

    public function store(Request $request)
    {
        request()->validate([
            'nombrecompania' =>'required',
            'localizacion' =>'required',
            ]);
            if(request('nombrecompania'))
            Compania::create($request->all());

    return redirect()->route('companias.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $compania = Compania::find($id);
        return view('companias.editar', compact('compania'));
    }

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

    public function destroy($id)
    {
        DB::table('companias')->where('id', $id)->delete();

        return redirect()->route('companias.index');
    }
}
