@extends('layouts.app')
@section('content')
    <div class="container">

        <form action=" {{ route('cuentas.create') }} " enctype="multipart/form-data" method="GET">

            <input type="submit" value="Ingresar cuenta" class="btn btn-success">

        </form>
        <input type="hidden" value=" {{ $s = 0 }} ">
        <table class="table table-hover">

            <thead>

                <tr>
                    <th> N. </th>
                    <th class="text-center"> Cliente </th>
                    <th class="text-center"> Fecha inicial </th>
                    <th class="text-center"> Fecha final </th>
                    <th class="text-center"> Valor </th>
                    <th class="text-center"> Meses pagados </th>
                    <th class="text-center"> Fecha de pago </th>
                    <th class="text-center"> Acciones </th>


                </tr>

            </thead>

            <tbody>
                @foreach ($cuentas as $item)
                    <tr>

                        <th class="text-center"> {{ $s += 1 }}. </th>
                        <th class="text-center"> {{ $item->cliente }} </th>
                        <th class="text-center"> {{ $item->fecha_inicio }} </th>
                        <th class="text-center"> {{ $item->fecha_final }} </th>
                        <th class="text-center"> {{ $item->valor }} </th>
                        <th class="text-center"> {{ $item->meses_pagados }} </th>
                        <th class="text-center"> {{ $item->fecha_pago }} </th>
                        <th>

                            <a href="{{ url('cuentas/' . $item->id . '/edit') }}" class="btn btn-light">EDITAR</a>

                            <form action="{{ route('cuentas.destroy', $item->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-outline-danger" type="submit">ELIMINAR</button>



                        </th>

                    </tr>
                @endforeach



            </tbody>

        </table>

    </div>
@endsection
