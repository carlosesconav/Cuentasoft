<?php

namespace App\Http\Controllers;

use App\Models\cuenta_cobro;
use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CuentaCobroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = cuenta_cobro::all();

        return view('cuentas.index')->with('cuentas',$cuentas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clientes = Clientes::all();

        return view('cuentas.create')->with('clientes',$clientes);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infoCuentas = request()->except('_token');

        cuenta_cobro::insert($infoCuentas);

        return redirect()->route('cuentas.index')->with('Campos agregados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cuenta_cobro  $cuenta_cobro
     * @return \Illuminate\Http\Response
     */
    public function show(cuenta_cobro $cuenta_cobro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cuenta_cobro  $cuenta_cobro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::all();
        $data = cuenta_cobro::findOrFail($id);
        return view('cuentas.edit',compact('data','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cuenta_cobro  $cuenta_cobro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $reques,$id)
    {
        $data = request()->except(['_token', '_method']);
        cuenta_cobro::where('id','=',$id)->update($data);
        
        return redirect()->route('cuentas.index')->with('success','Cuenta Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cuenta_cobro  $cuenta_cobro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cuenta_cobro::destroy($id);
        return redirect()->route('cuentas.index');

    }
}
