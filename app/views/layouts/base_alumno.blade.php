<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alumnos | Instituto de Sistemas Cusco</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {{ HTML::style('assets/css/bootstrap.min.css') }}
        {{ HTML::style('assets/css/alumno.css') }}
        {{ HTML::script('assets/js/jquery.min.js') }}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
    <div class="site-wrapper">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Alumnos - <b>ISC</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Perfil</a></li>
                    <li><a href="#about">Mis Cursos</a></li>
                    <li><a href="#contact">Mis Notas</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('salir')}}"><span class="glyphicon glyphicon-off"> </span> Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
        <div class="cover-container">
            <div class="inner cover">
                <h1 class="cover-heading">@section('title') PANEL CONTROL<small>Instituto de Sistemas Cusco </small>@show</h1>

                @if (Session::get('message-success'))
                <div class="alert alert-success">{{ Session::get('message-success')}}</div>
                @endif
                @if (Session::get('message-warning'))
                <div class="alert alert-warning">{{ Session::get('message-warning')}}</div>
                @endif
                @if (Session::get('message-danger'))
                <div class="alert alert-danger">{{ Session::get('message-danger')}}</div>
                @endif
                @yield('content')
            </div>
        </div>
    <div class="mastfoot">
        <div class="inner">
          <p><a href="#"><b>Instituto de Sistimeas Cusco</b></a>, by <a href="#">@sofwareStudient</a>.</p>
        </div>
    </div>
</div>
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    </body>
</html>