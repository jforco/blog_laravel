<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">  
        <!-- Styles -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{asset('img/logo.png')}}" rel="icon">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        @yield('css')
    </head>
    <body>
    <!-- #header -->   
    <header class="fondo">
        <!-- #nav-menu-container -->

        <div class="contenedor-central">
        	<div class="row no-gutters align-items-center">
        		<div class="col-sm-8">
        			<a class="navbar-brand" href="{{ url('/') }}">
	                	<img id="img-logo" src="{{ asset('/img/logo01.png') }}">
	            	</a>
        		</div>
        		<div class="col-sm-4">
        			<div class="row no-gutters justify-content-end" id="links-arriba">
        				<a href="#" class="btn-circle" style="background-color: #3b5998;">
        					<i class="fa fa-facebook icono icono-fb"></i>
        				</a>
        				<a href="#" class="btn-circle" style="background-color: #00aced;">
        					<i class="fa fa-twitter icono icono-tw"></i>
        				</a>
        				<a href="#" class="btn-circle" style="background-color: #4875B4;">
        					<i class="fa fa-linkedin icono icono-ln"></i>
        				</a>
        				<a href="#" class="btn-circle" style="background-color: #C63D2D;">
        					<i class="fa fa-google-plus icono icono-gg"></i>
        				</a>
        			</div>
        		</div>
        	</div>
            <div class="row justify-content-end mx-0">
                <form class="form" method="GET" action="{{ url ('buscar')}}">
                    <input type="text" name="busqueda" id="busqueda" placeholder="buscar...">
                    <button type="submit" class="btn btn-light py-0 px-1" disabled><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm titulos" id="navegacion">
            <div class="contenedor-central">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-navicon menu-xs"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <!--
                        <li class="dropdown submenu">
                            <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INICIO</div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="#mision">Mision</a>
                                <a class="dropdown-item" href="#vision">Vision</a>
                                <a class="dropdown-item" href="#historia">Quienes somos</a>
                            </div>
                        </li>
                        -->
                        <li class="nav-item"><a class="nav-link urlsolo" href="{{ url('/') }}">Inicio</a></li>
                        <li class="separador text-white d-none d-sm-block">|</li>

                        <li class="nav-item"><a class="nav-link urlsolo" href="{{ url('/acerca-de') }}">Acerca de</a></li> 
                        <li class="separador text-white d-none d-sm-block">|</li>

                        <li class="nav-item"><a class="nav-link urlsolo" href="{{ url('/inversiones') }}">Inversiones</a></li>
                        <li class="separador text-white d-none d-sm-block">|</li>

                        <li class="nav-item"><a class="nav-link urlsolo" href="{{ url('/consejos-negocio') }}">Consejos de negocio</a></li>
                        <li class="separador text-white d-none d-sm-block">|</li>

                        <li class="nav-item"><a class="nav-link urlsolo" href="{{ url('/noticias') }}">Noticias & Eventos</a></li>  
                        <li class="separador text-white d-none d-sm-block">|</li>

                        <li class="nav-item"><a class="nav-link urlsolo" href="{{ url('/blog') }}">Blog</a></li>  
                        <li class="separador text-white d-none d-sm-block">|</li>

                        <li class="nav-item"><a class="nav-link urlsolo" href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
        <!-- #nav-menu-container -->       
    </header>
    <!-- #header -->



    @yield('body')



    <section id="footer" class="fondo">
        <div class="row justify-content-center mx-0" id="links-abajo">
            <a href="#" class="btn-circle" style="background-color: #3b5998;">
                <i class="fa fa-facebook icono icono-fb"></i>
            </a>
            <a href="#" class="btn-circle" style="background-color: #00aced;">
                <i class="fa fa-twitter icono icono-tw"></i>
            </a>
            <a href="#" class="btn-circle" style="background-color: #4875B4;">
                <i class="fa fa-linkedin icono icono-ln"></i>
            </a>
            <a href="#" class="btn-circle" style="background-color: #C63D2D;">
                <i class="fa fa-google-plus icono icono-gg"></i>
            </a>
        </div>
        <footer class="contacto">
            <div class="contenedor-central text-white">
                <div class="row mx-0">
                    <div class="col-sm-6 col-md-4">
                        <div>
                            <p><i class="fa fa-plus-square"></i> <strong>Mapa del Sitio</strong></p>
                            <div class="contenedor-footer">
                            	<p class="small my-1"><a href="{{ url('/') }}" class="link">Inicio</a></p>
	                            <p class="small my-1"><a href="{{ url('/acerca-de') }}" class="link">Acerca de</a></p>
	                            <p class="small my-1"><a href="{{ url('/inversiones') }}" class="link">Inversiones</a></p>
	                            <p class="small my-1"><a href="{{ url('/consejos-negocio') }}" class="link">Consejos de negocio</a></p>
                                <p class="small my-1"><a href="{{ url('/noticias-eventos') }}" class="link">Noticias & Eventos</a></p>
	                            <p class="small my-1"><a href="{{ url('/blog') }}" class="link">Blog</a></p>
	                            <p class="small my-1"><a href="{{ url('/contacto') }}" class="link">Contacto</a></p>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div>
                            <p><i class="fa fa-user-o"></i> <strong>Contacto</strong></p>
                            <div class="contenedor-footer">
                                <p class="small m-0">Informacion de contacto</p>
                                <div class="container">
                                    <p class="small"><i class="fa fa-globe"></i> <a class="link" href="www.teclu.com">Sitio web</a></p>
                                    <p class="small"><i class="fa fa-address-book"></i>  Calle Colon Nº 632 - Planta Alta</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <!--
                    <div class="col-sm-6 col-md-4">
                        <div class="container">
                            <h5><i class="fa fa-briefcase"></i> <strong>Portafolio</strong></h5>
                            <div class="contenedor-footer">
                                <p style="margin: 0px">Teclu Srl.</p>
                                <div class="container">
                                    <p class="small"><i class="fa fa-globe"></i> <a class="link" href="www.teclu.com">Sitio web</a></p>
                                    <p class="small"><i class="fa fa-address-book"></i>  Calle Colon Nº 632 - Planta Alta</p>
                                </div>
                                <p style="margin: 0px">4PF Srl.</p>
                                <div class="container">
                                    <p class="small"><i class="fa fa-globe"></i> <a class="link" href="www.cuatropf.com">Sitio web</a></p>
                                    <p class="small"><i class="fa fa-address-book"></i>  Calle Colon Nº 632 - Planta Alta</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    -->
                    <div class="col-sm-6 col-md-4">
                        <div>
                        	<p><i class="fa fa-copyright"></i> <strong>Copyright</strong></p>
                        	<div class="contenedor-footer">
                        		<p class="small">Diseñado por <strong><a href="http://cuatropf.com/" class="link">4PF</a></strong>. All Rights Reserved 2018.</p>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.bundle.min.js') }}" ></script>
    @yield('js')
    </body>
</html>
