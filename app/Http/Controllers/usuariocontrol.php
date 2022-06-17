<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class usuariocontrol extends Controller
{
    /**
     * Display a listing of the resource.a
     *
     * @return \Illuminate\Http\Response
     */
    protected $usuario;
      public function __construct(usuario $usuario)
    {
        $this->usuario = $usuario;
    }


    public function index(usuario $usuario)
    {
        $usuario = $this->usuario->obtenerUsuario();
        return view('usuarios.lista', ['usuario' => $usuario]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new usuario ($request->all());
        $usuario->save();
        return redirect()->action([usuariocontrol::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $usuario = $this->usuario->obtenerUsuarioPorId($id);
        return view('usuarios.ver',['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuario->obtenerUsuarioPorId($id);
        return view('usuarios.editar',['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $usuario = usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action ([usuarioontrol::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = usuario::find($id);
        $usuario -> delete();
        return redirect ()->action([usuariocontrol::class, 'index']);
    }
}
