@extends('templates.master2')

@section('titulo', 'Inversiones')

@section('titulo-seccion', 'INVERSIONES')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion" href="{{ url('inversiones/teclu') }}"><i class="fa fa-angle-right pr-2"></i>Teclu SRL</a>
	<a class="menu-opcion menu-opcion-ultimo" href="{{ url('inversiones/cuatropf') }}"><i class="fa fa-angle-right pr-2"></i>4PF Marketing Digital</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<h3>Proyectos emprendidos por Luis</h3>
		<p class="pequeño text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros. Fusce nulla velit, sagittis et feugiat scelerisque, malesuada eu est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum molestie pharetra aliquet. Donec pharetra dolor at enim posuere, sit amet venenatis odio ullamcorper. Sed facilisis nisi a neque faucibus consequat. Aliquam vel augue vel lectus fringilla eleifend ut vitae orci. Nam lacus felis, auctor ornare congue non, ultricies sit amet orci. Etiam maximus leo quam, in tristique tortor tristique eget. Sed consectetur a mauris ac vehicula. In urna ligula, lobortis id vestibulum nec, eleifend ullamcorper orci. Duis sit amet ante molestie, semper purus sodales, suscipit purus. </p>

		<div class="row">
			<div class="col">
				<a href="{{ url('inversiones/teclu') }}">
                    <img width="100%" src="{{ asset('/img/a1.jpg') }}" alt="imagen">
                    <div class="d-inline-flex px-1 tituloPanel2">Teclu Srl.</div>
                </a>
			</div>
			<div class="col">
				<a href="{{ url('inversiones/cuatropf') }}">
                    <img width="100%" src="{{ asset('/img/a3.jpg') }}" alt="imagen">
                    <div class="d-inline-flex px-1 tituloPanel2">4PF Marketing Digital</div>
                </a>
			</div>
		</div>
	</div>
@endsection