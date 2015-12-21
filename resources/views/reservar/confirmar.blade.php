
@extends('layouts.alumno')


@section('content')
    <div id="muestraEquipo" class="mostrarEquipo">

        <h1>{{$equipos->equ_marca}}</h1><br>

<p>Selecciona la fecha de retiro del equipo. Recuerda que nasgoiasndoginas dgoasdighodasigh aosdigad sogiadhsgo iadshgo </p>
      {{--  <table class="table ">

            <tr><th>Descripcion <td>{{$equipos->equ_descripcion}}</td></tr>
            <tr><th>RAM<td>{{$equipos->equ_estado}}</td></tr>
            <tr><th>Procesador <td>{{$equipos->equ_tipo}}</td></tr>
            <tr><th>Memoria Video <td>{{$equipos->equ_tipo}}</td></tr>
            <tr><th>Video<td>{{$equipos->equ_tipo}}</td></tr>

        </table>--}}

        {!!Form::open(['route'=>'confirmar','method'=>'POST'])!!}
        {!!  Form::hidden('equ_id', $equipos->equ_id, array('class' => 'form-control'))!!}
        {!!  Form::hidden('alu_rut', '18137900-6', array('class' => 'form-control'))!!}
        {!!  Form::date('fecha', 'seleccionafecha', array('class' => 'form-control'))!!} </div>

        {!! Form::submit('Reservar',['class'=>'btn btn-primary']) !!}
        {!!Form::close()!!}



@endsection