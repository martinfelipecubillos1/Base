<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use App\Models\Elementoinventario;
use App\Models\Estado;
use App\Models\Movimiento;
use App\Models\Movimientoinv;
use App\Models\Proveedor;
use App\Models\Responsable;
use App\Models\responsablespordependencia;
use App\Models\User;
use Illuminate\Http\Request;

USE Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
class MovimientoinvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


//consulta de llaves foraneas a la vista
        $Movimientoinvs = DB::table('movimientoinvs')
        ->join('responsables', 'responsables.id', '=', 'movimientoinvs.responsable')
        ->join('elementos', 'elementos.id', '=', 'movimientoinvs.elemento')
        ->join('estados', 'estados.id', '=', 'movimientoinvs.estado')
        ->join('proveedors', 'proveedors.id', '=', 'movimientoinvs.proveedor')
        ->join('movimientos', 'movimientos.id', '=', 'movimientoinvs.tipomovimiento' )
        ->join('users as a', 'a.id', '=', 'movimientoinvs.usuario')
        ->join('users as b', 'b.id', '=', 'movimientoinvs.actualiza')
         ->select('movimientoinvs.*', 'responsables.nombre', 'elementos.nombreelemento', 'estados.nombreestado', 'proveedors.nombreproveedor', 'movimientos.nombremovimiento', 'a.name as nombreCrea', 'b.name as nombreActualiza',)
        ->paginate(2);



      // dd($Movimientoinvs);

       // $responsablespordependencias = responsablespordependencia::paginate(5);



       return view('movimientoinvs.index', compact('Movimientoinvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsablespordependencias = responsablespordependencia::all();
        $elementoinventarios = Elementoinventario::all();
        $elementos = Elemento::all();
        $estados = Estado::all();
        $proveedors = Proveedor::all();
        $movimientos = Movimiento::all();
        $users = User::all();
        $responsables = Responsable::all();
        return view('movimientoinvs.crear', compact('elementos','responsablespordependencias','estados','proveedors','movimientos','users','responsables','elementoinventarios'));
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
            'responsable' =>'required|exists:responsables,id',
            'elemento' =>'required',
            'estado' =>'required',
            'proveedor' =>'required',
            'tipomovimiento' =>'required',
            'usuario' =>'required',

            ]);
        //  dd($request->all());

           Movimientoinv::create([
            'responsable' => $request->input('responsable'),
            'elemento' => 1,
            'estado' => 2,
            'proveedor' => 1,
            'tipomovimiento' => 1,
            'usuario' => Auth::user()->id,
            'actualiza' => Auth::user()->id,
        ]);

    return redirect()->route('movimientoinvs.index');
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


        $responsablespordependencias = responsablespordependencia::all();
        $elementoinventarios = Elementoinventario::all();
        $elementos = Elemento::all();
        $estados = Estado::all();
        $proveedors = Proveedor::all();
        $movimientos = Movimiento::all();
        $users = User::all();
        $responsables = Responsable::all();
        $movimientoinv = Movimientoinv::find($id);
        return view('movimientoinvs.editar', compact('movimientoinv','elementos','responsablespordependencias','estados','proveedors','movimientos','users','responsables','elementoinventarios'));



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

            'responsable' =>'required',
            'elemento' =>'required',
            'estado' =>'required',
            'proveedor' =>'required',
            'tipomovimiento' =>'required',

      //        'correo' =>'required|unique:responsables',


            ]);
            //dd($request->all());
           $responsable = Movimientoinv::find($id);
    $responsable->update($request->all());
    return redirect()->route('movimientoinvs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('movimientoinvs')->where('id', $id)->delete();

        return redirect()->route('movimientoinvs.index');
    }
}
