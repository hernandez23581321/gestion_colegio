<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatedraticoMateria;
class CatedraticoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catedratico_materia=CatedraticoMateria::all();
        return $catedratico_materia;
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
       $catedratico_materia=new CatedraticoMateria();
       $catedratico_materia->codigo_materia=$request->codigo_materia;
       $catedratico_materia->codigo_catedratico=$request->codigo_catedratico;
       $catedratico_materia->save();


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
       $catedratico_materia=CatedraticoMateria::findOrFail($request -> id);
       $catedratico_materia->codigo_materia=$request->codigo_materia;
       $catedratico_materia->codigo_catedratico=$request->codigo_catedratico;
       $catedratico_materia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $catedratico_materia=CatedraticoMateria::destroy($request -> id);
        return $catedratico_materia;
    }
}
