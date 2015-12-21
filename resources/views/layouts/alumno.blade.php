<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SGNOT</title>

    {!!Html::style('css/app.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}


</head>

<body>

<div id="wrapper">


    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">SGNOT</a>-->
            <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
            <small style="font-size: 14px;">
                <img style="width:21px;height:20px;" src="{{ asset('/images/escudo.png') }}">
                Universidad Del B&iacute;o-B&iacute;o
            </small>
                </a>
                </div>
           {{-- <img src="{{ asset('/images/escudo.png') }}" width="100px" height="45px" hspace="50" alt="" />--}}

        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i>Perfil </a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i>Configuracion </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesion</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{url('reservar/solicitar')}}"><i class="fa fa-arrow-right"></i>Reservar equipo<span class="fa arrow"></span></a>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Informacion personal<span class="fa arrow"></span></a>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-share"></i> Extender prestamo<span class="fa arrow"></span></a>

                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <div id="page-wrapper" align="center" >
        @yield('content')

    </div>

</div>

{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/metisMenu.min.js')!!}
{!!Html::script('js/sb-admin-2.js')!!}

</body>

</html>
