<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Animales;
use App\Models\Especies;
use Faker\Core\File;
use Illuminate\Http\Request;

class WebController extends Controller
{
 public function adoptindex(){
    $animal= Animales::join('especies','especies.id','=','animales.especie_id')->where('estado_id',1)->get();
    $especie= Especies::get();
    return view('adopt',compact('animal','especie'));
 }
 public function adoptsingleindex($id){
    $animal= Animales::join('especies','especies.id','=','animales.especie_id')->where('estado_id',1)->where('animales.id',$id)->first();

    return view('adopt-single',compact('animal'));
 }

 public function galleryindex(){
    $path = base_path('public/storage/animal-images/*');
    return view('gallery',compact('path'));
 }
}
