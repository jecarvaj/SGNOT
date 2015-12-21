@extends('layouts.admin')


@section('content')
@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	{{Session::get('message')}}
</div>
@endif

	<table class="table">
		<thead>
			<th>RUT</th>		
			<th>Nombres</th>
			<th>ApellidoP</th>
			<th>ApellidoM</th>
			<th>Direccion</th>
			<th>Fono</th>
			<th>Carrera</th>
			<!--<th>Correo</th>-->
			<th>Estado</th>
			<th>Operaciones</th>
		</thead>
		@foreach($alumnos as $alumno)
		<tbody>
			<td>{{$alumno->alu_rut}}</td>
			<td>{{$alumno->alu_nombres}}</td>
			<td>{{$alumno->alu_paterno}}</td>
			<td>{{$alumno->alu_materno}}</td>
			<td>{{$alumno->alu_direccion}}</td>
			<td>{{$alumno->alu_fono}}</td>
			<td>{{$alumno->alu_carrera}}</td>
			<!--<td>{{$alumno->alu_correo}}</td>-->
			<td>{{$alumno->alu_estado}}</td>
			<td>{!!link_to_route('alumno.edit', $title = 'Editar', $parameters = $alumno->alu_rut, $attributes = ['class'=>'btn btn-primary']);!!}</td>
			<td>	
				{!!Form::open(['route' => ['alumno.destroy',$alumno],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger',"onclick"=>"return confirm('Seguro que desea eliminar?')"])!!}
				
				{!!Form::close()!!}</td>
		</tbody>
		@endforeach

	</table>
	{!! $alumnos->render() !!}
@stop