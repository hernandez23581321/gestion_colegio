<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradomateria;
class GradoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grado_materia=Gradomateria::all();
        return $grado_materia;
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
       $grado_materia=new Gradomateria();
       $grado_materia->codigo_grado=$request->codigo_grado;
       $grado_materia->codigo_materia=$request->codigo_materia;
      
       $grado_materia->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
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
        $grado_materia=Gradomateria::findOrFail($reques->id);
        $grado_materia->codigo_grado=$request->codigo_grado;
        $grado_materia->codigo_materia=$request->codigo_materia;
      
        $grado_materia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $grado_materia=Gradomateria::destroy($request->id);
        return $grado_materia;
    }
}
