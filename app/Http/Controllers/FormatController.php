<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Clientes;
use App\Models\cuenta_cobro;
use App\Exports\ClientesExport;
use App\Exports\CuentasExport;

class FormatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formatexport.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Excel::download(new ClientesExport, 'Clientes.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Format $format)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function destroy(Format $format)
    {
        //
    }

    public function descargar()
    {

        return Excel::download(new CuentasExport, 'Cuentas.xlsx');

    }

}
