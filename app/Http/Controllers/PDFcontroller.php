<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Adopciones;
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
        $cuidados =Cuidados::where('check', '=', true)->where('cuidados.animal_id', $id)->get();

        $fecha = Carbon::now()->toDateString();

        $pdf = Pdf::loadView('pdf.animalreport', compact('animal','cuidados'));
        return $pdf->stream('reporte-animal-' . $id . '--' . $fecha . '.pdf');
    }

    public function animaladopt($id){
        $fecha = Carbon::now()->toDateString();
        $animal = Animales::join('especies', 'especies.id', '=', 'animales.especie_id')->join('razas','razas.id','=','animales.raza_id')->join('adopciones','adopciones.animal_id','=','animales.id')->where('adopciones.id',$id)->first();
        $adoptante=Adopciones::join('adoptantes','adoptantes.id','=','adopciones.adoptante_id')->where('adopciones.id',$id)->first();
        $pdf = Pdf::loadView('pdf.animaladopt',compact('animal','adoptante'));
        return $pdf->stream('reporte-adopcion-' . $id . '--' . $fecha . '.pdf');
    }
}
