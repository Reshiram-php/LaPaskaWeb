<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Animales;
use App\Models\Especies;
use App\Models\Productos;
use App\Models\Voluntarios;
use Faker\Core\File;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function homeindex(){
        $animal = Animales::join('especies', 'especies.id', '=', 'animales.especie_id')->where('estado_id', 1)->take(4)->get(['animales.id','especie_id', 'imagen', 'icon', 'nombre', 'sexo']);
        $aconteo= Animales::where('estado_id',2)->count();
        $voluntario = Voluntarios::take(3)->get();
        return view('home',compact('animal','voluntario','aconteo'));
    }

    public function adoptindex()
    {
        $animal = Animales::join('especies', 'especies.id', '=', 'animales.especie_id')->where('estado_id', 1)->get(['animales.id','especie_id', 'imagen', 'icon', 'nombre', 'sexo']);
        $especie = Especies::get();
        return view('adopt', compact('animal', 'especie'));
    }
    public function adoptsingleindex($id)
    {
        $animal = Animales::join('especies', 'especies.id', '=', 'animales.especie_id')->where('estado_id', 1)->where('animales.id', $id)->first();

        return view('adopt-single', compact('animal'));
    }

    public function galleryindex()
    {
        $path = base_path('public/storage/animal-images/*');
        return view('gallery', compact('path'));
    }
    public function teamindex()
    {
        $voluntario = Voluntarios::get();

        return view('team', compact('voluntario'));
    }


    public function productindex()
    {
        $product = Productos::get();
        return view('product', compact('product'));
    }

    public function messageContent(Request $request)
    {
        if ($request->ajax()) {
            Notification::make()
                ->title($request->option)
                ->body('de: '.$request->name.'<br>'.'correo: '.$request->email.'<br>'.$request->message.'')
                ->sendToDatabase(auth()->user());
            return 0;
        }
    }
}
