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
                <th>ID </th>
                <th class="text-center"> Cliente </th>
                <th class="text-center"> Fecha inicial </th>
                <th class="text-center"> Fecha final </th>
                <th class="text-center"> Valor </th>
                <th class="text-center"> Meses pagados </th>
                <th class="text-center"> Fecha de pago </th>

            </tr>

        </thead>

        <tbody>
            @foreach ($cuentas as $item)
                <tr>

                    <th class="text-center"> {{ $item->id }} </th>
                    <th class="text-center"> {{ $item->cliente }} </th>
                    <th class="text-center"> {{ $item->fecha_inicio }} </th>
                    <th class="text-center"> {{ $item->fecha_final }} </th>
                    <th class="text-center"> {{ $item->valor }} </th>
                    <th class="text-center"> {{ $item->meses_pagados }} </th>
                    <th class="text-center"> {{ $item->fecha_pago }} </th>

                </tr>
            @endforeach



        </tbody>

    </table>

    
</body>
</html>