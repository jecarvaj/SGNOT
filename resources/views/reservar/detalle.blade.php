
@extends('layouts.alumno')


@section('content')

    {{--   @if(Session::has('message'))

       <div class="alert alert-success alert-dismissible" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           {{Session::get('message')}}
       </div>
   @endif--}}

    <div id="muestraEquipo" class="mostrarEquipo">

        <h1>{{$equipos->equ_marca}}</h1><br>

        <table class="table ">

            <tr><th>Descripcion <td>{{$equipos->equ_descripcion}}</td></tr>
            <tr><th>Tipo <td>{{$equipos->equ_tipo}}</td></tr>
            <tr><th>Disco duro<td>{{$equipos->hardware->hard_disco}}</td></tr>
            <tr><th>RAM<td>{{$equipos->hardware->hard_ram}}</td></tr>
            <tr><th>Procesador <td>{{$equipos->hardware->hard_procesador}}</td></tr>
            <tr><th>Memoria Video <td>{{$equipos->hardware->hard_video}}</td></tr>
            <tr><th>Disco duro<td>{{$equipos->hardware->hard_disco}}</td></tr>

        </table>
    </div>

    {!!Form::open(['route'=>'reservar.store','method'=>'POST'])!!}
    {!!  Form::hidden('id', $equipos->equ_id, array('class' => 'form-control'))!!}
    {!! Form::submit('Generar reserva',['class'=>'btn btn-primary']) !!} <a href="buscarEquipo" class="btn btn-success">Volver</a>
    {!!Form::close()!!}





@endsection