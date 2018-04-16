@extends('templates.master2')

@section('titulo', 'Noticias')

@section('titulo-seccion', 'NOTICIAS')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion menu-opcion-activo" href="{{ url('noticias') }}"><i class="fa fa-angle-right pr-2"></i>Noticias</a>
	<a class="menu-opcion menu-opcion-ultimo" href="{{ url('eventos') }}"><i class="fa fa-angle-right pr-2"></i>Eventos</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		@forelse ($noticias as $noticia)
		    <div class="row my-2">
		    	<div class="col-sm-4">
		    		<img width="100%" src="{{ Voyager::image(str_replace('.jpg','-cropped.jpg', $noticia->image)) }}">
		    	</div>
		    	<div class="col-sm-8">
		    		<p class="my-0 h5 colorPrincipal">{{ $noticia->title }}</p>
		    		<p class="pequeño text-justify">{{ $noticia->excerpt }}</p>
		    		<a class="colorPrincipal" href="{{ url('/noticias/' . $noticia->slug ) }}"><strong>Ver Noticia</strong></a>
		    	</div>
		    </div>

		@empty
		    <p>Aun no hay Publicaciones en esta sección.</p>
		@endforelse
		<br>
	</div>
@endsection