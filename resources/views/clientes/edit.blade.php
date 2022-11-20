@extends('layouts.app')

@section('content')

<div class="container">

    <form action=" {{ url('clientes/'.$data->id) }} " enctype="multipart/form-data" method="POST">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label class="form-label" for="nombre">Nombre:</label>
            <input class="form-control" name="nombre" id="nombre" type="text" required value=" {{ $data->nombre }}">
            <br/>
        </div>

        <div class="form-group">

            <label class="form-label" for="apellidoss">Apellido:</label>
            <input class="form-control" name="apellidos" id="apellidos" type="text" required value=" {{ $data->apellidos }} ">
            <br/>

        </div>

        <div class="form-group">

            <label class="form-label" for="correo">Correo:</label>
            <input class="form-control" name="correo" id="correo" type="email" required value=" {{ $data->correo }} ">
            <br/>

        </div>
    
        <div class="form-group">

            <label class="form-label" for="celular">Celular:</label>
            <input class="form-control" name="celular" id="celular" type="text" required value=" {{ $data->celular }} ">
            <br/>

        </div>
        
        <div class="form-group">

            <label class="form-label" for="direccion">Direccion:</label>
            <input class="form-control" name="direccion" id="direccion" type="text" required value=" {{ $data->direccion }} ">
            <br/>

        </div>
    
        <div class="form-group">

            <label class="form-label" for="foto">Foto:</label>
            <img src=" {{ asset('storage') . '/' . $data->foto }} " alt="70" width="70">
            {{ $data->foto }}
            <input class="form-control" name="foto" id="foto" type="file">
            <br/>

        </div>


        <button  class="btn btn-outline-success" type="submit">Actualizar</button>
    
    </form>
    

</div>

@endsection

