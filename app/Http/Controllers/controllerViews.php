<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerViews extends Controller
{
    public function showForm(){
        return view('formulario');
    }

    public function showTable(){
        return view('tabla');
    }
}
