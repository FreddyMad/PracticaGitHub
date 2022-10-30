<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarFormAutos;

class controllerViews extends Controller
{
    public function showForm(){
        return view('formulario');
    }

    public function showTable(){
        return view('tabla');
    }

    public function agregarAuto(validarFormAutos $val){
        return redirect('tabla')->with('confirm','Se guardo exitosamente');
    }
}
