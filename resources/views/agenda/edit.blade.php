@extends('layouts.admin')

@section ('content')


	<br>
	<br>

	<div class="form-group">
		{!! Form::label('codigo','Codigo Equipo')!!}
		{!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese codigo', 'required|numeric',]) !!}
	</div>

	
	
	<div class="form-group">
		{!! Form::submit('Buscar', ['class' => 'btn btn-primary']) 	!!}
	</div>

	<h2>Ejemplo HTML5 date input</h2>
		
	<input type="datetime" name="fecha">
	




@endsection