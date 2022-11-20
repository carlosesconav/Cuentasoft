<?php

namespace App\Exports;

use App\Models\cuenta_cobro;
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

class CuentasExport implements FromView
{

    public function view(): View{

        return view('formatexport.cuentasExport', [

            'cuentas' => cuenta_cobro::all()
    
        ]);

    } 

}
