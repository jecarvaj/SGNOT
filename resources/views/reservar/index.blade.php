

@extends('layouts.alumno')


@section('content')

{{--    @if(Session::has('message'))

        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
  {{--  @endif--}}{{--

    <table class="table">
        <thead>
        <th>RUT</th>
        <th>Nombres</th>
        <th>ApellidoP</th>
        <th>ApellidoM</th>

        </thead>
        @foreach($equipos as $equipo)
            <tbody>
            <td>{{$equipos->equ_marca}}</td>
            <td>{{$equipos->equ_descripcion}}</td>
            <td>{{$equipos->equ_estado}}</td>
            <td>{{$equipos->equ_tipo}}</td>

--}}{{--            <td>{{$equipos->alu_fono}}</td>
            <td>{{$equipos->alu_carrera}}</td>
            <td>{{$alumno->alu_estado}}</td>
--}}{{----}}{{--         <!--   <td>{!!link_to_route('alumno.edit', $title = 'Editar', $parameters = $alumno->alu_rut, $attributes = ['class'=>'btn btn-primary'])!!}</td>-->--}}{{----}}{{--
            <td>
                {!!Form::open(['route' => ['alumno.destroy',$equipo],'method'=>'DELETE'])!!}
                {!!Form::submit('Eliminar',['class'=>'btn btn-danger',"onclick"=>"return confirm('Seguro que desea eliminar?')"])!!}

                {!!Form::close()!!}</td>--}}{{--
            </tbody>
        @endforeach

    </table>
    {!! $equipos->render() !!}--}}


@stop