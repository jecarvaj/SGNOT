<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Reserva;
use App\Equipo;
use Session;
use Redirect;


class reservarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		return view('reservar.index');//->with('equipos',$equipos);

	}

	public function solicitar(){
		$random=$this->equipoRandom();

		if($random==false){

		return view('reservar.noStock');
		}else{
		return view('reservar.solicitar')->with('equipos', $random);
		}
	}


	public function equipoRandom() //retorna un equipo aleatorio
	{
		$equipos=Equipo::all();


		$intermedio=0;
		$avanzado=0;
		$nodisponible=0;
		$tipo='';
		$cont=0;

		foreach($equipos as $equipo)
		{
			if($equipo->equ_estado=='Disponible')
			{
				if( $equipo->equ_tipo=='Basico')
				{
					return $equipo;
				}else if($equipo->equ_tipo=='Intermedio')
					{
						$intermedio++;
					}
					elseif($equipo->equ_tipo=='Intermedio')
					{
						$avanzado++;
					}


			}else{$nodisponible++;}

			$cont++;
		}

		if($nodisponible==$cont){

			return false;
		}
		if($intermedio>=$avanzado)
		{
			$tipo='Intermedio';

		}else if($intermedio<$avanzado)
			{
				$tipo='Avanzado';
			}
		$equipo=Equipo::where('equ_tipo','=','$tipo')->andWhere('equ_estado','=','Disponible')->first();

		return $equipo;
	}

	public function confirmarReserva(Request $request){

		$reserva=new Reserva();
		$reserva->alu_rut=$request->alu_rut;
		$reserva->equ_id=$request->equ_id;
		$reserva->re_fecha_solicitud=date("Y-m-d");
		$reserva->re_fecha_retiro=$request->fecha;
		$devolucion=strtotime ( '+5 day' , strtotime ( $request->fecha ) ) ;
		$reserva->re_fecha_devolucion=date("Y-m-d",$devolucion);
		$reserva->save();

		$mensaje = "Se ha generado la reserva. La fecha de retiro es ".$request->fecha." y la fecha de devolucion es "
			.$reserva->re_fecha_devolucion;
		echo "<script>";
		echo "alert('$mensaje');";
		echo "window.location = '../reservar';";
		echo "</script>";

	}

	public function buscarEquipo(){
		$equipos=Equipo::all()->where('equ_estado','Disponible');
		return view('reservar/buscar')->with('equipos',$equipos);
	}
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		/*$reserva=new Reserva();
		$reserva->equ_id=$request->id;
		$reserva->alu_rut='18137900-6';
		$reserva->re_fecha_solicitud='05-05-2015';
		$reserva->save();*/
		$equipo=Equipo::find($request->id);
		return view('reservar.confirmar')->with('equipos',$equipo);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$equipos=Equipo::find($id);

		return view('reservar.detalle')->with('equipos',$equipos);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
