<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animales;
use App\Models\Cuidados;
use Barryvdh\DomPDF\Facade\Pdf ;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PDFcontroller extends Controller
{
    public function animalreport($id)
    {
        $animal = Animales::join('especies', 'especies.id', '=', 'animales.especie_id')->join('razas','razas.id','=','animales.raza_id')->where('animales.id', $id)->first();
        $cuidados =Cuidados::join('animales', 'animales.id', '=', 'cuidados.animal_id')
            ->where('check', '=', true)
            ->where('animales.id', $id)->get();
        $fecha = Carbon::now()->toDateString();

        $pdf = Pdf::loadView('pdf.animalreport', compact('animal','cuidados'));
        return $pdf->stream('reporte-animal-' . $id . '--' . $fecha . '.pdf');
    }
}
