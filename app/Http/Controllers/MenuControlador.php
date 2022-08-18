<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MenuControlador extends Controller
{
   public function opcindex(){
        return view('index');
    }

    public function opcPrincipal(){
        return view('menu');
    }

    public function opcNosotros(){
        return view('nosotros');
    }

    public function opcContacto(){
        return view('contacto');
    }
    public function perfil(){
        
        return view('perfil');
    }
      public function changepass(){
        
        return view('changepass');
    }
}
