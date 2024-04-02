<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Animales;
use App\Models\Especies;
use Illuminate\Http\Request;

class WebController extends Controller
{
 public function adoptindex(){
    $animal= Animales::where('estado_id',1)->get();
    $especie= Especies::get();
    return view('adopt',compact('animal','especie'));
 }
}
