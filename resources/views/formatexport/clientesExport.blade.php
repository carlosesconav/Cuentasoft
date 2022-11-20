<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <table class="table table-hover">

        <thead>

            <tr>
                
                <th > ID </th>
                <th class="text-center"> Nombre </th>
                <th class="text-center"> Apellido </th>
                <th class="text-center"> Correo </th>
                <th class="text-center"> Celular </th>
                <th class="text-center"> Direccion </th>

            </tr>

        </thead>

        <tbody>

            @foreach ($clientes as $item)
                <tr>

                    <th> {{ $item->id }} </th>
                    <th> {{ $item->nombre }} </th>
                    <th> {{ $item->apellidos }} </th>
                    <th> {{ $item->correo }} </th>
                    <th> {{ $item->celular }} </th>
                    <th> {{ $item->direccion }} </th>

                </tr>
            @endforeach

        </tbody>

    </table>


</body>
</html>