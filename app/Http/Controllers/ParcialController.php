<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcial;
class ParcialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcial=Parcial::all();
        return $parcial;
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
        $parcial=new Parcial();
        $parcial->codigo_parcial=$request->codigo_parcial;
        $parcial->parcial=$request->parcial;
        $parcial->descripcion=$request->descripcion;
        $parcial->estado=$request->estado;
        echo "Datos Guardados";
        $parcial->save();
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
        $parcial=Parcial::findOrFail($request->id);
        $parcial->codigo_parcial=$request->codigo_parcial;
        $parcial->parcial=$request->parcial;
        $parcial->descripcion=$request->descripcion;
        $parcial->estado=$request->estado;
        echo "Datos Actualizados";
        $parcial->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $parcial=Parcial::destroy($request->id);
        echo "Datos Borrados";
        return $parcial;
    }
}
