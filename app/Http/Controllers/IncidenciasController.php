<?php

namespace App\Http\Controllers;
use App\Models\Incidencia;

use Illuminate\Http\Request;

class IncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $incidencias = Incidencia::all();
        return view('incidencias', ['incidencias' => $incidencias]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$incidencia=
            $incidencia->latitud =  $request->latitud;
            $incidencia->latitud =  $request->latitud;
            $incidencia->latitud =  $request->latitud;
            $incidencia->latitud =  $request->latitud;
            $incidencia->latitud =  $request->latitud;
            $incidencia->latitud =  $request->latitud;
            $incidencia->latitud =  $request->latitud;*/
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incidencia =Incidencia::find($id);
        return view('detalleIncidencia', ['incidencia' => $incidencia]);
      
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
    public function update(Request $request, $id)
    {
        //
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
    }
}
