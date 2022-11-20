@extends('layouts.app')

@section('content')
    <div class="container">

        <form action=" {{ route('clientes.store') }} " enctype="multipart/form-data" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label class="form-label" for="nombre">Nombre:</label>
                <input class="form-control" name="nombre" id="nombre" type="text" required placeholder="Nombre">
                <br />
            </div>

            <div class="form-group">

                <label class="form-label" for="apellidoss">Apellido:</label>
                <input class="form-control" name="apellidos" id="apellidos" type="text" required placeholder="Apellido">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="correo">Correo:</label>
                <input class="form-control" name="correo" id="correo" type="email" required placeholder="Correo">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="celular">Celular:</label>
                <input class="form-control" name="celular" id="celular" type="text" required placeholder="Celular">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="direccion">Direccion:</label>
                <input class="form-control" name="direccion" id="direccion" type="text" required placeholder="Direccion">
                <br />

            </div>

            <div class="form-group">

                <label class="form-label" for="foto">Foto:</label>
                <input class="form-control" name="foto" id="foto" type="file">
                <br />

            </div>


            <button class="btn btn-outline-success" type="submit">Guardar</button>

        </form>


    </div>
@endsection
