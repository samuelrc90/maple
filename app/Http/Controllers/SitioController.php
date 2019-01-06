<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitio;

class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sitios= Sitio::orderBY('id','ASC')->paginate(10);
        return view('sitio.index',compact('sitios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('sitio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['id'=>'required','Tipo'=>'required', 'Nombre'=>'required', 'Categoria'=>'required', 'Importe'=>'required']);
        Sitio::create($request->all());
        return redirect()->route('sitio.index')->with('success','Registro creado satisfactoriamente');
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
        $sitio = Sitio::find($id);
        return view('sitio.edit',compact('sitio'));
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
        //
        $this->validate($request,['id'=>'required','Tipo'=>'required', 'Nombre'=>'required', 'Categoria'=>'required', 'Importe'=>'required']);
        Sitio::find($id)->update($request->all());
        return redirect()->route('sitio.index')->with('success','Registro Actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Sitio::find($id)->delete();
        return redirect()->route('sitio.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
