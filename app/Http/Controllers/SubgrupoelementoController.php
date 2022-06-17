<?php

namespace App\Http\Controllers;

use App\Models\Grupoelemento;
use App\Models\Marca;
use App\Models\Subgrupoelemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SubgrupoelementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  dd($id);
        return view('subgrupos.crear');
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
       request()->validate([
        'nombresubgrupo' =>'required',
        'color' =>'required',
        ]);
        if(request('nombresubgrupo'))
        Subgrupoelemento::create($request->all());

return redirect()->route('grupos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $Subgrupos = Subgrupoelemento::all();// $responsablespordependencias = responsablespordependencia::paginate(5);

        $Subgrupos = DB::table('subgrupoelementos')
        ->join('grupoelementos', 'grupoelementos.id', '=', 'subgrupoelementos.codigogrupo')
        ->where('grupoelementos.id', '=', $id)
        ->select('subgrupoelementos.*', 'grupoelementos.nombregrupo','grupoelementos.id as idg')
        ->get();
        $Grupos = Grupoelemento::all();

//vamos a la vista index de la carpeta subgrupos
    return view('subgrupos.index', compact('Subgrupos','id','Grupos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     // dd($id);
     $marcas = Marca::all();
      $Subgrupos=Subgrupoelemento::all();
      return view("elementos.crear",compact('id','Subgrupos','marcas'));
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
        DB::table('subgrupoelementos')->where('id', $id)->delete();
        $Grupos = Grupoelemento::all();
       return view('grupos.index',compact('Grupos'));
    }
}
