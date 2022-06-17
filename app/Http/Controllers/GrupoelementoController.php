<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Elemento;
use App\Models\Grupoelemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrupoelementoController extends Controller
{
    /**
     * Display a listing of the resource..
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    $Grupos = Grupoelemento::all();// $responsablespordependencias = responsablespordependencia::paginate(5);


    return view('grupos.index', compact('Grupos'));

    }

    public function create()
    {
        $colors = Color::all();
   //     dd($colors->all());
        return view('grupos.crear',compact('colors'));
    }

    public function store(Request $request)
    {
        request()->validate([

            'nombregrupo' =>'required',
            'color' =>'required',
            ]);
            if(request('nombregrupo'))
            Grupoelemento::create($request->all());

    return redirect()->route('grupos.index');
    }

    public function show($id)
    {
        $Grupos = Grupoelemento::all();

    $Elementos = DB::table('elementos')
        ->join('subgrupoelementos', 'subgrupoelementos.id', '=', 'elementos.codigosubgrupo')
        ->join('grupoelementos', 'grupoelementos.id', '=', 'subgrupoelementos.codigogrupo')
        ->where('grupoelementos.id', '=', $id)
        ->select('elementos.*', 'subgrupoelementos.nombresubgrupo', 'grupoelementos.nombregrupo','grupoelementos.id as idg')
        ->paginate(10);


    $Subgrupoelementos = DB::table('subgrupoelementos')
    ->join('grupoelementos', 'grupoelementos.id', '=', 'subgrupoelementos.codigogrupo')
    ->select('subgrupoelementos.*', 'grupoelementos.nombregrupo','grupoelementos.id as idg')
    ->get();

$nom = $id;

    return view('subgrupos.index', compact('Elementos','Subgrupoelementos','nom', 'Grupos'));

    }
//vamos a crear al subgrupo
    public function edit($id)
    {

        $colors = Color::all();
        $Grupos=Grupoelemento::all();

return view("subgrupos.crear",compact('id','Grupos','colors'));
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        DB::table('grupoelementos')->where('id', $id)->delete();

        return redirect()->route('grupos.index');
    }
}
