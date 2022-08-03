<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\pacientedalta;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\App;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verps = paciente::all()->where('users_pacientes',Auth ()->user()->id);
        return view('layouts.paciente',['paciente' => $verps]);
    }

    public function principal()
    {
        return view('layouts.principal');
    }
    public function index2()
    {
        return view('layouts.index');
    }

    public function altas()
    {
        $verpsa = pacientedalta::all()->where('users_pacientes',Auth ()->user()->id);
        return view('layouts.pacientesdalta',['paciente' => $verpsa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.registrarpa');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $npaciente = new paciente;
        $npaciente -> nombres = $request -> nombre;
        $npaciente -> edad = $request -> edad;
        $npaciente -> sexo = $request -> sexo;
        $npaciente -> fechanaci = $request -> fechanaci;
        $npaciente -> ciudadori = $request -> ciudadori;
        $npaciente -> fechains = $request -> fechains;
        $npaciente -> hospitalori = $request -> hospitalori;
        $npaciente -> nombretut = $request -> nombretut;
        $npaciente -> telefonotut = $request -> telefonotut;
        $npaciente -> users_pacientes = Auth() -> user() -> id;
        $npaciente -> save();
        return redirect('/index');
       
    }

   public function verpacientes($id = null){
        $ver_paciente = paciente::find($id);
        return view('layouts.verpaciente',['paciente'=>$ver_paciente]);

    }
    public function verpacientedealta($id = null){
       $ver_paciente = pacientedalta::find($id);
       return view('layouts.verpacientedealta',['paciente'=>$ver_paciente]);

   }

    public function alta(Request $peticion)
    {
        $idpaciente = $peticion->id;

        # Recuperar artículo que se va a eliminar
        $pacienteParaEliminar = paciente::findOrFail($idpaciente);

        # Crear nuevo artículo dado de Alta/eliminado
        $pacienteDadoDeAlta = new pacientedalta;
        $pacienteDadoDeAlta -> nombres = $pacienteParaEliminar -> nombres;
        $pacienteDadoDeAlta -> edad = $pacienteParaEliminar -> edad;
        $pacienteDadoDeAlta -> sexo = $pacienteParaEliminar -> sexo;
        $pacienteDadoDeAlta -> fechanaci = $pacienteParaEliminar -> fechanaci;
        $pacienteDadoDeAlta -> ciudadori = $pacienteParaEliminar -> ciudadori;
        $pacienteDadoDeAlta -> fechains = $pacienteParaEliminar -> fechains;
        $pacienteDadoDeAlta -> hospitalori = $pacienteParaEliminar -> hospitalori;
        $pacienteDadoDeAlta -> nombretut = $pacienteParaEliminar -> nombretut;
        $pacienteDadoDeAlta -> telefonotut = $pacienteParaEliminar -> telefonotut;
        $pacienteDadoDeAlta -> users_pacientes = Auth() -> user() -> id ;
        

        # Guardar el que se da de Alta
        $pacienteDadoDeAlta->save();
       
        # Eliminar el original
        $pacienteParaEliminar->delete();

        # Y listo ;)
        return redirect('/vistapacientes');
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
    public function edit(paciente $id)
    {
        return view('layouts.editarpaciente', ['paciente'=>$id]);
    }
    public function dealtapaciente(paciente $id)
    {
        return view('layouts.dardealta', ['paciente'=>$id]);
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
        $actpaciente =  paciente::find($id);
        $actpaciente -> nombres = $request -> nombre;
        $actpaciente -> edad = $request -> edad;
        $actpaciente -> sexo = $request -> sexo;
        $actpaciente -> fechanaci = $request -> fechanaci;
        $actpaciente -> ciudadori = $request -> ciudadori;
        $actpaciente -> fechains = $request -> fechains;
        $actpaciente -> hospitalori = $request -> hospitalori;
        $actpaciente -> nombretut = $request -> nombretut;
        $actpaciente -> telefonotut = $request -> telefonotut;
        $actpaciente -> save();
        return redirect('/vistapacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarpa = Paciente::find($id);
        $eliminarpa->delete();
        return redirect('/vistapacientes');
    }
    public function destroyalta($id)
    {
        $eliminarpa = pacientedalta::find($id);
        $eliminarpa->delete();
        return redirect('/pacientes=de=Alta');
    }
//descargar y ver pdf -> pacientes activos
    public function pdf()
    {
        $pacientes = Paciente::all();
        return view ('ejemplo', compact('pacientes'));
    }
    public function descargarpdf()
    {
        $pacientes = Paciente::all();
        $pdf = PDF::loadview('ejemplo', compact('pacientes'));
        return $pdf->download('Pacientes_Activos.pdf');
    }
// descargar y ver pdf -> pacientes de alta

public function verdealtapdf()
{
    $pacientes = Pacientedalta::all();
    return view ('pdfdealta', compact('pacientes'));
}
public function descargardealtapdf()
{
    $pacientes = Pacientedalta::all();
    $pdf = PDF::loadview('pdfdealta', compact('pacientes'));
    return $pdf->download('Pacientes_de_Alta.pdf');
}
}