<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\conexion;

class ApiController extends Controller
{
    
public function create(request $request){


    $conexion = new conexion();

    $conexion->Nombre = $request->input("Nombre");
    $conexion->N_Telefono = $request->input("N_Telefono");
    $conexion->Correo_Electronico = $request->input("Correo_Electronico");
    $conexion->Empresa = $request->input("Empresa");
    $conexion->Observacion = $request->input("Observacion");

    $conexion->save();
    $message=["message"=>"Dato registrado "];
    return response()->json($message);
}

public function read(request $request){

    $conexions = new conexion();
    $data = $conexions->all();
    return response()->json($data);

return true;
    
}

public function update(request $request){

    $iddatos = $request->query("id");
    $conexion = new conexion();
    $conexionUp = $conexion->find($iddatos);

    $conexionUp->Nombre = $request->input("Nombre");
    $conexionUp->N_Telefono = $request->input("N_Telefono");
    $conexionUp->Correo_Electronico = $request->input("Correo_Electronico");
    $conexionUp->Empresa = $request->input("Empresa");
    $conexionUp->Observacion = $request->input("Observacion");

    $conexionUp->save();
    $message=["message"=>"Actualizacion Exitosa!!! "];

/*$UpdateConexion = [

    "Nombre" => $request->input("Nombre"),
    "N_Telefono" => $request->input("N_Telefono"),
    "Correo_Electronico" => $request->input("Correo_Electronico"),
    "Empresa" => $request->input("Empresa"),
    "Observacion" => $request->input("Observacion")
];
*/
return $message;
        
}

public function delete(request $request){

    $iddatos = $request->query("id");
    $conexion = new conexion();
    $conexionUp = $conexion->find($iddatos);

   
    $conexionUp->delete();
    $message=[
        "message"=>"AEliminacion Exitosa!! ",
        "idContacto"=> $request->query("id")
    
    
    
    ];


/*$UpdateConexion = [

    "Nombre" => $request->input("Nombre"),
    "N_Telefono" => $request->input("N_Telefono"),
    "Correo_Electronico" => $request->input("Correo_Electronico"),
    "Empresa" => $request->input("Empresa"),
    "Observacion" => $request->input("Observacion")
];
*/
return $message;
        
}

}