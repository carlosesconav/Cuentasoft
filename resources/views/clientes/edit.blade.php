VISTA PARA EDITAR CLIENTES

<form action=" {{ url('clientes/'.$data->id) }} " enctype="multipart/form-data" method="POST">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <label for="nombre">Nombre</label>
    <input name="nombre" id="nombre" type="text" required value=" {{ $data->nombre }} ">
    <br/>
    
    <label for="apellido">Apellido</label>
    <input name="apellidos" id="apellidos" type="text" required value=" {{ $data->apellidos }} ">
    <br/>

    <label for="correo">Correo</label>
    <input name="correo" id="correo" type="email" required value=" {{ $data->correo }} ">
    <br/>
    
    <label for="celular">Celular</label>
    <input name="celular" id="celular" type="text" required value=" {{ $data->celular }} ">
    <br/>

    <label for="direccion">Direccion</label>
    <input name="direccion" id="direccion" type="text" required value=" {{ $data->direccion }} ">
    <br/>

    <label for="foto">Foto</label>
    {{ $data->foto }}
    <br/>
    <input name="foto" id="foto" type="file" value="  ">
    <br/>

    <button type="submit">Guardar cambios</button>

</form>
