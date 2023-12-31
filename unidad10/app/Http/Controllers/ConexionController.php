<?php

namespace App\Http\Controllers;

use App\Models\conexion;
use Illuminate\Http\Request;

class ConexionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contacto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosEmpleado = request()->except('_token');
        conexion::insert($datosEmpleado);
        return view('/contacto');
    }

    /**
     * Display the specified resource.
     */
    public function show(conexion $conexion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(conexion $conexion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, conexion $conexion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(conexion $conexion)
    {
        //
    }

    public function contact_post(Request $request)
    {
 
        echo "Nombre".$request->input('Nombre')."<br>";
        echo "N_Telefono".$request->input('N_Telefono')."<br>";
        echo "Correo_Electronico".$request->input('Correo_Electronico')."<br>";
        echo "Empresa".$request->Empresa."<br>";
        echo "Observacion".$request->Observacion."<br>";
        
 
        return view('contact');
    }
}
