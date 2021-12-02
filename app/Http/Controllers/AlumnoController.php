<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno=Alumno::all();
        return $alumno;
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
        $alumno=new Alumno();
        $alumno->codigo_alumno=$request->codigo_alumno;
        $alumno->identidad=$request->identidad;
        $alumno->nombre=$request->nombre;
        $alumno->apellido=$request->apellido;
        $alumno->direccion=$request->direccion;
        $alumno->correo=$request->correo;
   
        $alumno->save();        
        
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
        $alumno=Alumno::findOrFail($reques->id);
        $alumno->codigo_alumno=$request->codigo_alumno;
        $alumno->identidad=$request->identidad;
        $alumno->nombre=$request->nombre;
        $alumno->apellido=$request->apellido;
        $alumno->direccion=$request->direccion;
        $alumno->correo=$request->correo;
   
        $alumno->save();      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $alumno=Alumno::destroy($request->id);
    }
}
