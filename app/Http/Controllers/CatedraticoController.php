<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Catedratico;
class CatedraticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catedratico=Catedratico::all();
        return $catedratico;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $catedratico=new Catedratico();
      $catedratico->codigo_catedratico=$request->codigo_catedratico;
      $catedratico->identidad=$request->identidad;
      $catedratico->nombre=$request->nombre;
      $catedratico->apellido=$request->apellido;
      $catedratico->direccion=$request->direccion;
      $catedratico->especialidad=$request->especialidad;
      $catedratico->estado=$request->estado;
      $catedratico->save();
       echo "Catedratico Guardado";


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $catedratico=Catedratico::findOrFail($request -> id);
      $catedratico->codigo_catedratico=$request->codigo_catedratico;
      $catedratico->identidad=$request->identidad;
      $catedratico->nombre=$request->nombre;
      $catedratico->apellido=$request->apellido;
      $catedratico->direccion=$request->direccion;
      $catedratico->especialidad=$request->especialidad;
      $catedratico->estado=$request->estado;
      $catedratico->save();
      echo "Catedratico Actualizado";
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $catedratico=Catedratico::destroy($request->id);
        return $catedratico;
    }
}
