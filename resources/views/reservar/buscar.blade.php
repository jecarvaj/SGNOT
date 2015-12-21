
@extends('layouts.alumno')


@section('content')
    <table class="table">
        <thead>
        <th>Marca</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Tipo</th>

        </thead>
        @foreach($equipos as $equipo)
            <tbody>
            <td>{{$equipo->equ_marca}}</td>
            <td>{{$equipo->equ_descripcion}}</td>
            <td>{{$equipo->equ_estado}}</td>
            <td>{{$equipo->equ_tipo}}</td>

            <td>{!!link_to_route('reservar.show', $title = 'Ver', $parameters = $equipo->equ_id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
            <td>
                {!!Form::open(['route' => ['reservar.store'],'method'=>'POST'])!!}
                {!!  Form::hidden('id', $equipo->equ_id, array('class' => 'form-control'))!!}
                {!!Form::submit('Reservar',['class'=>'btn btn-success'])!!}

                {!!Form::close()!!}</td>
            </tbody>
    @endforeach

@endsection