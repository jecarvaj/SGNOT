@extends('layouts.admin')
@section('content')
	<div class="h1">Formulario de Ingresos de Alumno</div>

	{!!Form::open(['route'=>'alumno.store','method'=>'POST'])!!}
		
		@include('alumno.forms.alu')


		<!--<div class="form-group">
			{!!Form::label('Contraseña:')!!}
			{!!Form::password('contraseña',['class'=>'form-control','placeholder'=>'Ingresa el nombre'])!!}
		</div>-->
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	
@stop