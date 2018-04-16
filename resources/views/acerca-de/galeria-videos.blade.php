@extends('templates.master2')

@section('titulo', 'Galeria de videos')

@section('titulo-seccion', 'GALERIA DE VIDEOS')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion" href="{{ url('acerca-de') }}"><i class="fa fa-angle-right pr-2"></i>Acerca de Luis</a>
	<a class="menu-opcion" href="{{ url('acerca-de/hechos-divertidos') }}"><i class="fa fa-angle-right pr-2"></i>Hechos divertidos</a>
	<a class="menu-opcion" href="{{ url('galeria-fotos') }}"><i class="fa fa-angle-right pr-2"></i>Galeria de Fotos</a>
	<a class="menu-opcion menu-opcion-activo menu-opcion-ultimo" href="{{ url('galeria-videos') }}"><i class="fa fa-angle-right pr-2"></i>Galeria de Videos</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<h3>titulo</h3>
		<p>contenido</p>
	</div>
@endsection