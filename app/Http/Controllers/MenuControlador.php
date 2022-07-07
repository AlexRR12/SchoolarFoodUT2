<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuControlador extends Controller
{
    public function opcPrincipal(){
        return view('menu');
    }

    public function opcNosotros(){
        return view('nosotros');
    }

    public function opcContacto(){
        return view('contacto');
    }
}
