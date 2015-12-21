@extends('layouts.admin')

@section ('content')

	{!! Form::open() !!}

	<br>
	<br>

	<div class="form-group">
		{!! Form::label('codigo','Codigo Equipo')!!}
		{!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
	</div>

	
	
	<div class="form-group">
		{!! Form::submit('Buscar', ['class' => 'btn btn-primary']) 	!!}
	</div>

	{!! Form::close() !!}


@endsection