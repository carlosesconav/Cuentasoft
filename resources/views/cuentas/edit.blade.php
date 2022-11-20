@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ url('cuentas/'.$data->id) }}" enctype="multipart/form-data" method="POST">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label class="form-label" for="cliente">Cliente:</label>
                <select id="cliente" class="form-select" name="cliente" aria-label="Default select example">
                    <option selected >{{ $data->cliente }}</option>
                    @foreach ($clientes as $item)
                    <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                    @endforeach
                   
                </select>
                <br />
            </div>

            <div class="form-group">

                <label class="form-label" for="fecha_inicio">Fecha inicial:</label>
                <input class="form-control" name="fecha_inicio" id="fecha_inicio" type="date" required value="{{ $data->fecha_inicio }}">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="fecha_final">Fecha final:</label>
                <input class="form-control" name="fecha_final" id="fecha_final" type="date" required value="{{ $data->fecha_final }}">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="valor">Valor:</label>
                <input class="form-control" name="valor" id="valor" type="text" required value="{{ $data->valor }}">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="meses_pagados">Meses pagados:</label>
                <input class="form-control" name="meses_pagados" id="meses_pagados" type="number" required value="{{ $data->meses_pagados }}">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="fecha_pago">Fecha de pago:</label>
                <input class="form-control" name="fecha_pago" id="fecha_pago" type="date" value="{{ $data->fecha_pago }}">
                <br />

            </div>


            <button class="btn btn-outline-success" type="submit">Actualizar</button>

        </form>


    </div>
@endsection
