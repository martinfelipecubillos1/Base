<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Elementos = Elemento::paginate(5);
       return view('elementos.index', compact('Elementos'));
    }

    public function create()
    {
        return view('elementos.crear');
    }

    public function store(Request $request)
    {
        request()->validate([

            'nombreelemento' =>'required',
            'color' =>'required',
            ]);
            if(request('nombreelemento'))
            Elemento::create($request->all());

    return redirect()->route('elementos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $elemento = Elemento::find($id);
        return view('elementos.editar', compact('elemento'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
          //  'codigounidad' => 'required|unique:unidades',
           // 'codigoelemento' => 'required|unique:unidades',
            'nombreelemento' =>'required',

            ]);
            $cambio = $request->all();
            $compania = Elemento::find($id);
            $compania->update($request->all());

    return redirect()->route('elementos.index');
    }

    public function destroy($id)
    {
        DB::table('elementos')->where('id', $id)->delete();

        return redirect()->route('elementos.index');
    }
}
