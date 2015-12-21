@extends('layouts.admin')

@section ('content')


	<table class="table">
		<thead>
			<th>ID Reserva </th>		
			<th>ID Equipo</th>
			<th>Alumno</th>
			<th>Fecha Solicitud</th>
			<th>Fecha de Retiro</th>
			
			
			
		</thead>
		@foreach($reservas as $reserva)
		<tbody>
		
			<td>{{$reserva->re_id}}</td>
			<td>{{$reserva->equ_id}}</td>
			<td>{{$reserva->alu_rut}}</td>
			<td>{{$reserva->re_fecha_solicitud}}</td>
			<td>{{$reserva->re_fecha_retiro}}</td>
			<td>
				{!! link_to_route('agenda.edit', $title = 'Registrar Prestamo', $parameters = $reserva->re_id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
			
		</tbody>
		@endforeach

	</table>
	<!--{!! $reservas->render() !!}-->



@stop
