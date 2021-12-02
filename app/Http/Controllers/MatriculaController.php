<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
class MatriculaController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matricula=Matricula::all();
        return $matricula;
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
       $matricula=new Matricula();
       $matricula->codigo_matricula=$request->codigo_matricula->uniqid;
      
       $matricula->codigo_alumno=$request->codigo_alumno;
       $matricula->codigo_grado=$request->codigo_grado;
       $matricula->codigo_padre=$request->codigo_padre;
       echo "Matricula Guardada";
       $matricula->save();

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
        $matricula=Matricula::findOrFail($request->id);
        $matricula->codigo_matricula=$request->codigo_matricula;
        $matricula->codigo_alumno=$request->codigo_alumno;
        $matricula->codigo_grado=$request->codigo_grado;
        $matricula->codigo_padre=$request->codigo_padre;
        echo "Matricula Actualizada";
        $matricula->save();
        return $matricula;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        $matricula=Matricula::destroy($request->id);
        echo "Matricula Eliminada";
        return $matricula;
    }
}
