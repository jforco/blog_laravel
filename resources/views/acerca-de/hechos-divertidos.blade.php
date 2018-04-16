@extends('templates.master2')

@section('titulo', 'Hechos Divertidos')

@section('titulo-seccion', 'HECHOS DIVERTIDOS')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion" href="{{ url('acerca-de') }}"><i class="fa fa-angle-right pr-2"></i>Acerca de Luis</a>
	<a class="menu-opcion menu-opcion-activo" href="{{ url('acerca-de/hechos-divertidos') }}"><i class="fa fa-angle-right pr-2"></i>Hechos divertidos</a>
	<a class="menu-opcion menu-opcion-ultimo" href="{{ url('galeria-fotos') }}"><i class="fa fa-angle-right pr-2"></i>Galeria de Fotos</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<p class="pequeño">Siempre me preguntan qué altura tengo. A continuación hay algunos datos y cifras divertidas sobre la vida de Luis</p>
		<img width="100%" class="p-3" src="{{ asset('/img/infografia.png') }}">
		<br>
	</div>
@endsection
