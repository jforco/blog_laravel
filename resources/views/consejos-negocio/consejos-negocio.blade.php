@extends('templates.master2')

@section('titulo', 'Consejos de Negocio')

@section('titulo-seccion', 'CONSEJOS DE NEGOCIO')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion menu-opcion-activo" href="{{ url('consejos-negocio') }}"><i class="fa fa-angle-right pr-2"></i>Consejos de Negocio</a>
	<a class="menu-opcion" href="{{ url('guia-negocio') }}"><i class="fa fa-angle-right pr-2"></i>Guia de negocios</a>
	<a class="menu-opcion menu-opcion-ultimo" href="{{ url('preguntas-frecuentes') }}"><i class="fa fa-angle-right pr-2"></i>Preguntas Frecuentes</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<h3>Consejos formados de años de experiencia</h3>
		<h5 class="colorPrincipal">CONSEJO NRO X</h5>
		<p class="pequeño text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros. Fusce nulla velit, sagittis et feugiat scelerisque, malesuada eu est. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

		<h5 class="colorPrincipal">CONSEJO NRO X</h5>
		<p class="pequeño text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros. Fusce nulla velit, sagittis et feugiat scelerisque, malesuada eu est. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

		<h5 class="colorPrincipal">CONSEJO NRO X</h5>
		<p class="pequeño text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros. Fusce nulla velit, sagittis et feugiat scelerisque, malesuada eu est. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

		<h5 class="colorPrincipal">CONSEJO NRO X</h5>
		<p class="pequeño text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros. Fusce nulla velit, sagittis et feugiat scelerisque, malesuada eu est. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

		<h5 class="colorPrincipal">CONSEJO NRO X</h5>
		<p class="pequeño text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros. Fusce nulla velit, sagittis et feugiat scelerisque, malesuada eu est. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

	</div>
@endsection



