@extends('templates.master')

@section('titulo', 'Luis Vargas')

@section('css')
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/slick/slick-theme.css') }}"/>
@endsection

@section('body')

<section id="imagen-principal" class="contenedor-central2">
    <div class="contenedor-central">
        <div id="contenido-principal">
            <p class="small text-white"><strong>Web oficial del</strong></p>
            <h5 class="text-white"><strong>Emprendedor</strong></h5>
            <h3 class="text-white"><strong>Luis Vargas</strong></h3>
            <div class="fb-like" data-href="https://www.facebook.com/ofertasteclu/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
        </div>
    </div>
</section>

<section id="cuadros" class="contenedor-central mt-3">
    <div class="row pb-5">
        <div class="col-md-9">
            <div class="row px-2">
                <div class="col-md-4 col-sm-6 px-2 pb-3">
                    <div class="card border-light m-0">
                        <a href="{{ url('acerca-de') }}">
                            <img class="card-img-top" width="100%" src="{{ asset('/img/caribe.jpg') }}" alt="Card imagen">
                            <div class="d-inline-flex px-1 tituloPanel">Acerca de mi</div>
                        </a>
                        <p class="small py-0 text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum urna nisl, a pulvinar purus molestie nec. In varius orci sollicitudin nulla tempus, quis cursus ante varius.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 px-2 pb-3">
                    <div class="card border-light m-0">
                        <a href="{{ url('inversiones') }}">
                            <img class="card-img-top" width="100%" src="{{ asset('/img/caribe.jpg') }}" alt="Card imagen">
                            <div class="d-inline-flex px-1 tituloPanel">Inversiones</div>
                        </a>
                        <p class="small py-0 text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum urna nisl, a pulvinar purus molestie nec. In varius orci sollicitudin nulla tempus, quis cursus ante varius.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 px-2 pb-3">
                    <div class="card border-light m-0">
                        <a href="{{ url('consejos-negocio') }}">
                            <img class="card-img-top" width="100%" src="{{ asset('/img/caribe.jpg') }}" alt="Card imagen">
                            <div class="d-inline-flex px-1 tituloPanel">Consejos de Negocios</div>
                        </a>
                        <p class="small py-0 text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum urna nisl, a pulvinar purus molestie nec. In varius orci sollicitudin nulla tempus, quis cursus ante varius.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row no-gutters align-items-end seccion-titulo mb-3 mx-0" >
                        <div class="col-sm-8">
                            <p class="h4 mb-0"><i class="fa fa-newspaper-o colorPrincipal"></i> &Uacuteltimas noticias</p>
                            </div>
                        <div class="col-sm-4">
                            <p class="text-right mb-0"><a href="{{ url('noticias') }}" class="link2">Ver mas <i class="fa fa-chevron-circle-right colorPrincipal"></i></a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card border-light m-0">
                                <a href="{{ url('acerca-de') }}">
                                    <img class="card-img-top" width="100%" src="{{ asset('/img/caribe.jpg') }}" alt="Card imagen">
                                    <div class="d-inline-flex px-1 tituloPanel">Titulo</div>
                                </a>
                                <p class="small py-0 text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum urna nisl, a pulvinar purus molestie nec. In varius orci sollicitudin nulla tempus, quis cursus ante varius.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters align-items-end seccion-titulo mb-3 mx-0" >
                        <div class="col-sm-8">
                            <p class="h4 mb-0"><i class="fa fa-file-text-o colorPrincipal"></i> &Uacuteltimas entrada</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-right mb-0"><a href="{{ url('blog') }}" class="link2">Ver mas <i class="fa fa-chevron-circle-right colorPrincipal"></i></a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card border-light m-0">
                                <a href="{{ url('acerca-de') }}">
                                    <img class="card-img-top" width="100%" src="{{ asset('/img/caribe.jpg') }}" alt="Card imagen">
                                    <div class="d-inline-flex px-1 tituloPanel">Titulo</div>
                                </a>
                                <p class="small py-0 text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum urna nisl, a pulvinar purus molestie nec. In varius orci sollicitudin nulla tempus, quis cursus ante varius.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="col-md-3">
            @include('facebook')
        </div>
    </div>
</section>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12&appId=175543323021297';
        fjs.parentNode.insertBefore(js, fjs);
    }   (document, 'script', 'facebook-jssdk'));
</script>


@endsection

@section('js')
<!-- efectos de animacion -->
<script type="text/javascript" src="{{ asset('/js/wow.min.js') }}" ></script>
<script>
    new WOW().init();
</script>


@endsection
