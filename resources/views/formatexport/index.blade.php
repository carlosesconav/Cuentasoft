@extends('layouts.app')
@section('content')
    <div class="container text-center">
        
        <div class="form-group">
            <label class="form-label" for="clientes">Descargar formato de clientes:</label>
            <br/>
            <a id="clientes" name="clientes" href="{{ route('documentos.create') }} " class="btn btn-primary">Descargar clientes</a>
            <br/>
        </div>

        <div class="form-group">

            <input type="hidden" name="" id="">
            <input type="hidden" name="" id="">

        </div>

        <div class="form-group">
            <label class="form-label" for="cuentas">Descargar formato de cuentas:</label>
            <br/>
            <a id="clientes" name="cuentas" href="{{ route('documentos.descargar') }} " class="btn btn-primary">Descargar cuentas</a>
            <br/>
        </div>

      
        
        

    </div>
@endsection
