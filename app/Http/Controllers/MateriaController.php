<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia=Materia::all();
        return $materia;
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
        $materia=new Materia();
        $materia->codigo_materia=$request->codigo_materia;
        $materia->materia=$request->materia;
        $materia->descripcion=$request->descripcion;
        $materia->estado=$request->estado;
        echo "Datos Guardados";
        $materia->save();
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
        $materia=Materia::findOrFail($request -> id);
        $materia->codigo_materia=$request->codigo_materia;
        $materia->materia=$request->materia;
        $materia->descripcion=$request->descripcion;
        $materia->estado=$request->estado;
        echo "Datos Guardados";
        $materia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $materia=Materia::destroy($request->id);
       echo "Datos Borrados\n";
       return $materia;
    }
}
