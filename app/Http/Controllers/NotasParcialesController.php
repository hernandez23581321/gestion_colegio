<?php

namespace App\Http\Controllers;

use App\NotasParciales;
use Illuminate\Http\Request;

class NotasParcialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nota=NotasParciales::all();
        return $nota;
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
        $nota=new NotasParciales();
        $nota->codigo_nota=$request->codigo_nota;
        $nota->codigo_parcial=$request->codigo_parcial;
        $nota->codigo_materia=$request->codigo_materia;
        $nota->nota=$request->nota;
        $nota->estado=$request->estado;
        $nota->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NotasParciales  $notasParciales
     * @return \Illuminate\Http\Response
     */
    public function show(NotasParciales $notasParciales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NotasParciales  $notasParciales
     * @return \Illuminate\Http\Response
     */
    public function edit(NotasParciales $notasParciales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NotasParciales  $notasParciales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $nota=NotasParciales::findOrFail($request->id);
        $nota->codigo_nota=$request->codigo_nota;
        $nota->codigo_parcial=$request->codigo_parcial;
        $nota->codigo_materia=$request->codigo_materia;
        $nota->nota=$request->nota;
        $nota->estado=$request->estado;
        $nota->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NotasParciales  $notasParciales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $nota=NotasParciales::destroy($req->id);
        return $nota;
    }
}
