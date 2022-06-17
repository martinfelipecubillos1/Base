<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use App\Models\Grupoelemento;
use App\Models\Marca;
use App\Models\Subgrupoelemento;
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


        $Grupos = Grupoelemento::all(); // $responsablespordependencias = responsablespordependencia::paginate(5);

        $Elementos = DB::table('elementos')
            ->join('subgrupoelementos', 'subgrupoelementos.id', '=', 'elementos.codigosubgrupo')
            ->join('grupoelementos', 'grupoelementos.id', '=', 'subgrupoelementos.codigogrupo')
            ->select('elementos.*', 'subgrupoelementos.nombresubgrupo', 'grupoelementos.nombregrupo', 'grupoelementos.id as idg')
            ->get();



        return view('elementos.index', compact('Grupos', 'Elementos'));
    }

    public function create()
    {
        return view('elementos.crear');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        request()->validate([
            'nombreelemento' => 'required',
            'marca' => 'required',
            'descripcion' => 'required',
        ]);
        if (request('nombreelemento'))
            Elemento::create($request->all());

        return redirect()->route('grupos.index');
    }

    public function show($id)
    {

        $Subgrupos = Subgrupoelemento::all();

        $Elementos = DB::table('elementos')
            ->join('subgrupoelementos', 'subgrupoelementos.id', '=', 'elementos.codigosubgrupo')
            ->join('marcas', 'marcas.id', '=', 'elementos.marca')
            ->join('grupoelementos', 'grupoelementos.id', '=', 'subgrupoelementos.codigogrupo')
            ->where('subgrupoelementos.id', '=', $id)
            ->select('elementos.*', 'subgrupoelementos.nombresubgrupo', 'grupoelementos.nombregrupo', 'grupoelementos.id as idg', 'marcas.nombremarca')
            ->paginate(10);


        $nom = $id;

        return view('elementos.show', compact('Elementos', 'nom', 'Subgrupos'));
    }

    public function edit($id)
    {
        $marcas = Marca::all();
        $elemento = Elemento::find($id);
        return view('elementos.editar', compact('elemento', 'marcas'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            //  'codigounidad' => 'required|unique:unidades',
            // 'codigoelemento' => 'required|unique:unidades',
            'nombreelemento' => 'required',
            'descripcion' => 'required',
        ]);

       // dd($request->all());
        $elemento = Elemento::find($id);
        $elemento->update($request->all());

        return redirect()->route('grupos.index');
    }

    public function destroy($id)
    {
        DB::table('elementos')->where('id', $id)->delete();

        return redirect()->route('grupos.index');
    }
}
