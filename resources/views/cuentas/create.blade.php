@extends('layouts.app')

@section('content')

<div class="container">

    <form action=" {{ route('cuentas.store') }} " enctype="multipart/form-data" method="POST">

        {{ csrf_field() }}
    
        <div class="form-group">
            <label class="form-label" for="cliente">Cliente:</label>
            <select id="cliente" class="form-select" name="cliente" aria-label="Default select example">
                <option selected disabled>SELECCIONE UN CLIENTE</option>
                @foreach ($clientes as $item)
                <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                @endforeach
               
              </select>
            <br/>
        </div>

        <div class="form-group">

            <label class="form-label" for="fecha_inicio">Fecha inicial:</label>
            <input class="form-control" name="fecha_inicio" id="fecha_inicio" type="date" required>
            <br/>

        </div>

        <div class="form-group">

            <label class="form-label" for="fecha_final">Fecha final:</label>
            <input class="form-control" name="fecha_final" id="fecha_final" type="date" required>
            <br/>

        </div>
    
        <div class="form-group">

            <label class="form-label" for="valor">Valor:</label>
            <input class="form-control" name="valor" id="valor" type="text" required>
            <br/>

        </div>
        
        <div class="form-group">

            <label class="form-label" for="meses_pagados">Meses pagados:</label>
            <input class="form-control" name="meses_pagados" id="meses_pagados" type="number" required>
            <br/>

        </div>
    
        <div class="form-group">

            <label class="form-label" for="fecha_pago">Fecha de pago:</label>
            <input class="form-control" name="fecha_pago" id="fecha_pago" type="date">
            <br/>

        </div>


        <button  class="btn btn-outline-success" type="submit">Guardar</button>
    
    </form>
    

</div>

@endsection

