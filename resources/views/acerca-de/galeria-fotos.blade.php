@extends('templates.master2')

@section('titulo', 'Galeria de fotos')

@section('titulo-seccion', 'GALERIA DE FOTOS')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
@endsection

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion" href="{{ url('acerca-de') }}"><i class="fa fa-angle-right pr-2"></i>Acerca de Luis</a>
	<a class="menu-opcion" href="{{ url('acerca-de/hechos-divertidos') }}"><i class="fa fa-angle-right pr-2"></i>Hechos divertidos</a>
	<a class="menu-opcion menu-opcion-activo  menu-opcion-ultimo" href="{{ url('galeria-fotos') }}"><i class="fa fa-angle-right pr-2"></i>Galeria de Fotos</a>

	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<div class="slider-for p-3">
			<div>
				<img width="100%" src="{{ asset('img/a1.jpg') }}">
			</div>
			<div>
				<img width="100%" src="{{ asset('img/a2.jpg') }}">
			</div>
			<div>
				<img width="100%" src="{{ asset('img/a3.jpg') }}">
			</div>
			<div>
				<img width="100%" src="{{ asset('img/bariloche.jpg') }}">
			</div>
			<div>
				<img width="100%" src="{{ asset('img/caribe.jpg') }}">
			</div>
			<div>
				<img width="100%" src="{{ asset('img/copacabana.jpg') }}">
			</div>
		</div>
		<div class="slider-nav px-5 py-3">
			<div class="m-1">
				<img width="100%" src="{{ asset('img/a1.jpg') }}">
			</div>
			<div class="m-1">
				<img width="100%" src="{{ asset('img/a2.jpg') }}">
			</div>
			<div class="m-1">
				<img width="100%" src="{{ asset('img/a3.jpg') }}">
			</div>
			<div class="m-1">
				<img width="100%" src="{{ asset('img/bariloche.jpg') }}">
			</div>
			<div class="m-1">
				<img width="100%" src="{{ asset('img/caribe.jpg') }}">
			</div>
			<div class="m-1">
				<img width="100%" src="{{ asset('img/copacabana.jpg') }}">
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			$('.slider-for').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	arrows: false,
			  	fade: true,
			  	asNavFor: '.slider-nav'
			});
			$('.slider-nav').slick({
			  	slidesToShow: 3,
			  	slidesToScroll: 1,
			  	asNavFor: '.slider-for',
			  	centerMode: true,
			  	focusOnSelect: true,
			  	responsive: [
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 2,
				  	slidesToScroll: 1,
				  	asNavFor: '.slider-for',
				  	centerMode: true,
				  	focusOnSelect: true
			      }
			    }
			  	]
			});
		});

	</script>
@endsection