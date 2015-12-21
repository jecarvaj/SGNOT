<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Alumno;
use Session;
use Redirect;

class ControladorAlumno extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {       
            $alumnos =Alumno::orderBy('alu_rut')->paginate(5);
            //$alumnos = Alumno::All();->paginate(1);
            //return view('alumno.index',compact('alumnos'));
            return view('alumno.index')->with('alumnos',$alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("alumno.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Alumno::create([
            'alu_rut'=>$request['rut'],
            'alu_nombres'=>$request['nombres'],
            'alu_paterno'=>$request['apellidoPaterno'],
            'alu_materno'=>$request['apellidoMaterno'],
            'alu_direccion'=>$request['direccion'],
            'alu_fono'=>$request['fono'],
            'alu_carrera'=>$request['carrera'],
            'alu_correo'=>$request['email'],
            'alu_estado'=>$request['estado'],

            //'password'=> bycrypt($request['password']),//ejemplo para password
            ]);
        Session::flash('message','Usuario Creado correctamante');
        return Redirect::to('/alumno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumno.edit')->with('alumno',$alumno);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        /*$alumno = Alumno::find($id);
        $alumno->fill($request->all());
        $alumno->save();
        return redirect('/alumno');*/

        $alumno= Alumno::find($id);
        $alumno->alu_rut=$request->rut;
        $alumno->alu_nombres=$request->nombres;
        $alumno->alu_paterno=$request->apellidoPaterno;
        $alumno->alu_materno=$request->apellidoMaterno;
        $alumno->alu_direccion=$request->direccion;
        $alumno->alu_fono=$request->fono;
        $alumno->alu_carrera=$request->carrera;
        $alumno->alu_correo=$request->email;
        $alumno->alu_estado=$request->estado;
        $alumno->save();

        Session::flash('message','Usuario editado correctamante');
        return Redirect::to('/alumno');
       //return redirect('/alumno');

        /*Session::flash('message','Usuario editado correctamante');
        return Redirect::to('alumno');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        Session::flash('message','Usuario eliminado'.$id);
        return Redirect::to('/alumno');
    }

}