<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Clientes::all();

        return view('clientes.index')->with('clientes',$clientes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('clientes.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infoClientes = request()->except('_token');

        if($request->hasFile('foto')){

            $infoClientes['foto']=$request->file('foto')->store('uploads','public');

        }

        Clientes::insert($infoClientes);

        return redirect()->route('clientes.index')->with('Campos agregados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = Clientes::findOrFail($id);
        return view('clientes.edit',compact('data'));
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $clientes = request()->except(['_token', '_method']);

        if($request->hasFile('foto')){

            $clientes = Clientes::findOrFail($id);
            Storage::delete('public/'.$clientes->foto);

            $data['foto']=$request->file('foto')->store('uploads','public');

        }

        Clientes::where('id','=',$id)->update($data);
        $clientes = Clientes::findOrFail($id);

        return redirect()->route('clientes.index')->with(compact('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $clientes= Clientes::findOrFail($id);
        if(Storage::delete('public/'.$clientes->foto)){

            Clientes::destroy($id);

        }

        return redirect()->route('clientes.index');
        

    }
}
