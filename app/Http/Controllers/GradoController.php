<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grado;
class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grado=Grado::all();
        return $grado;
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
        $grado=new Grado();
        $grado->codigo_grado=$request->codigo_grado;
        $grado->grado=$request->grado;
        $grado->descripcion=$request->descripcion;
        $grado->estado=$request->estado;
        echo "Datos Guardados";
        $grado->save();
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
        $grado=Grado::findOrFail($request -> id);
        $grado->codigo_grado=$request->codigo_grado;
        $grado->grado=$request->grado;
        $grado->descripcion=$request->descripcion;
        $grado->estado=$request->estado;
        echo "Datos Guardados";
        $grado->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $grado=Grado::destroy($request->id);
        return $grado;
    }
}
