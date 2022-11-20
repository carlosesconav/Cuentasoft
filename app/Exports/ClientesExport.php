<?php

namespace App\Exports;

use App\Models\Clientes;
use Maatwebsite\Excel\Concerns\FromCollection;
use Exception;
use PDO;
use App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithStyles;


class ClientesExport implements FromView
{

    public function view(): View{

        return view('formatexport.clientesExport', [

            'clientes' => Clientes::all()
    
        ]);

    } 

}
