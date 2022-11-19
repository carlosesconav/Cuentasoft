<?php

namespace App\Http\Controllers;

use App\Models\cuenta_cobro;
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
        return view('cuentas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(cuenta_cobro $cuenta_cobro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cuenta_cobro  $cuenta_cobro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuenta_cobro $cuenta_cobro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cuenta_cobro  $cuenta_cobro
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuenta_cobro $cuenta_cobro)
    {
        //
    }
}
