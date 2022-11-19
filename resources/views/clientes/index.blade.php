@extends('layouts.app')

@section('content')

<div class="container">

    
<form action=" {{ route('clientes.create') }} " enctype="multipart/form-data" method="GET">

    <input type="submit" value="Ingresar cliente" class="btn btn-success">

</form>
    <input type="hidden" value=" {{ $s=0 }} ">

    <table class="table table-hover">

        <thead>

            <tr>
                <th> N. </th>
                <th class="text-center"> Foto </th>
                <th class="text-center"> Nombre </th>
                <th class="text-center"> Apellido </th>
                <th class="text-center"> Correo </th>
                <th class="text-center"> Celular </th>
                <th class="text-center"> Direccion </th>
                <th class="text-center"> Acciones </th>
                

            </tr>

        </thead>

        <tbody>
            
            @foreach ($clientes as $item)
            <tr>

                <th> {{ $s+=1 }}. </th>
                <th> <img src=" {{ asset('storage').'/'.$item->foto }} " alt="70" width="70"> </th>
                <th> {{ $item->nombre }} </th>
                <th> {{ $item->apellidos }} </th>
                <th> {{ $item->correo }} </th>
                <th> {{ $item->celular }} </th>
                <th> {{ $item->direccion }} </th>
                <th class="text-center"> 

                    <a href=" {{ url('clientes/' .$item->id. '/edit') }} " class="btn btn-light">EDITAR</a>
                 
                    <form action=" {{ route('clientes.destroy', $item->id) }} " method="POST">
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