@extends('layouts.admin')
@section('content')

	
	<div class="h1">Actualizar {!! $alumno->alu_rut !!}</div>
	<!--{!!Form::model($alumno,['route' => ['alumno.update',$alumno->id],'method'=>'PUT'])!!}-->
		{!!Form::open(['route' => ['alumno.update',$alumno],'method'=>'PUT'])!!}
		<div class="form-group">
			{!!Form::label('RUT:')!!}
			{!!Form::text('rut',$alumno->alu_rut,['class'=>'form-control','placeholder'=>'Ingresar el RUT del alumno'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Nombres:')!!}
			{!!Form::text('nombres',$alumno->alu_nombres,['class'=>'form-control','placeholder'=>'Ingresar ambos nombres del alumno'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Apellido paterno:')!!}
			{!!Form::text('apellidoPaterno',$alumno->alu_paterno,['class'=>'form-control','placeholder'=>'Ingresar apellido paterno'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Apellido materno:')!!}
			{!!Form::text('apellidoMaterno',$alumno->alu_materno,['class'=>'form-control','placeholder'=>'Ingresar apellido materno'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Direccion:')!!}
			{!!Form::text('direccion',$alumno->alu_direccion,['class'=>'form-control','placeholder'=>'Ingresar la direccion del alumno'])!!}
		</div>					
		<div class="form-group">
			{!!Form::label('Fono:')!!}
			{!!Form::text('fono',$alumno->alu_fono,['class'=>'form-control','placeholder'=>'Ingresa numero de contacto'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Carrera:')!!}
			{!!Form::text('carrera',$alumno->alu_carrera,['class'=>'form-control','placeholder'=>'Ingresar carrera del alumno'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email',$alumno->alu_correo,['class'=>'form-control','placeholder'=>'Ingresar el correo del alumno'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Estado:')!!}
			{!!Form::text('estado',$alumno->alu_estado,['class'=>'form-control','placeholder'=>'Ingresar estado del alumno'])!!}
		</div>

		


		<!--<div class="form-group">
			{!!Form::label('Contraseña:')!!}
			{!!Form::password('contraseña',['class'=>'form-control','placeholder'=>'Ingresa el nombre'])!!}
		</div>-->
		{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
		


	{!!Form::open(['route' => ['alumno.destroy',$alumno],'method'=>'DELETE'])!!}

		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
	




@stop