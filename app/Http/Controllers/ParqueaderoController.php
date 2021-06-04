<?php

namespace App\Http\Controllers;

use App\Parqueadero;
use Illuminate\Http\Request;

class ParqueaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parqueaderos = Parqueadero::all();

        return view('home', ["parqueaderos"=>$parqueaderos]);
    }
    public function admin()
    {
        $parqueaderos = Parqueadero::all();

        return view('paneladmin', ["parqueaderos"=>$parqueaderos]);
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
        $parqueadero = new Parqueadero();
        $parqueadero->nombreParqueadero = $request->nombre;
        $parqueadero->numeroPuesto  = $request->puesto;
       $parqueadero->ubicacion = $request->ubicacion;
        $parqueadero->valor = $request->valor;
       $parqueadero->disponibilidad  = $request->disponible;
        $parqueadero->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function show(Parqueadero $parqueadero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function edit(Parqueadero $parqueadero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parqueadero $parqueadero)
    {
        $parqueadero = Parqueadero::find($request->id_park);
        $parqueadero->nombreParqueadero = $request->nombre_a;
        $parqueadero->numeroPuesto  = $request->puesto_a;
       $parqueadero->ubicacion = $request->ubicacion_a;
        $parqueadero->valor = $request->valor_a;
       $parqueadero->disponibilidad  = $request->disponible_a;
        $parqueadero->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parqueadero $parqueadero , Request $request)
    {
        $id= $request->id_park_e;
        $parqueadero = Parqueadero::find($id);
       $parqueadero->delete();

        return redirect()->back();
    }
}
