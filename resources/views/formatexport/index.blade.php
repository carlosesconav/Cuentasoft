@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="form-group">
            <label class="form-label" for="cliente">Cliente:</label>
            <select id="cliente" class="form-select" name="cliente" aria-label="Default select example">
                <option selected disabled>SELECCIONE UN DOCUMENTO</option>

                <option selected value="">Clientes</option>
                <option selected value="">Cuentas</option>

              </select>
            <br/>
        </div>

        <a href="{{ route('documentos.descargar') }} " class="btn btn-primary">Descargar</a>


    </div>
@endsection
