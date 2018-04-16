@extends('templates.master2')

@section('titulo', '4PF Marketing Digital')

@section('titulo-seccion', '4PF MARKETING DIGITAL')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion" href="{{ url('inversiones/teclu') }}"><i class="fa fa-angle-right pr-2"></i>Teclu SRL</a>
	<a class="menu-opcion menu-opcion-ultimo menu-opcion-activo" href="{{ url('inversiones/cuatropf') }}"><i class="fa fa-angle-right pr-2"></i>4PF Marketing Digital</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<div class="row">
			<div class="col-sm-8">
				<h3>Marketing Digital con redes sociales</h3>
				<p class="pequeño text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros. Fusce nulla velit, sagittis et feugiat scelerisque, malesuada eu est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum molestie pharetra aliquet. Donec pharetra dolor at enim posuere, sit amet venenatis odio ullamcorper. Sed facilisis nisi a neque faucibus consequat. Aliquam vel augue vel lectus fringilla eleifend ut vitae orci. Nam lacus felis, auctor ornare congue non, ultricies sit amet orci. Etiam maximus leo quam, in tristique tortor tristique eget. Sed consectetur a mauris ac vehicula. In urna ligula, lobortis id vestibulum nec, eleifend ullamcorper orci. Duis sit amet ante molestie, semper purus sodales, suscipit purus. </p>
				<p><i class="fa fa-globe"></i> <a href="http://www.cuatropf.com">Sitio web</a></p>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="{{ asset('/img/a1.jpg') }}" alt="Card image cap">
					<div class="card-body">
					    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus tincidunt ipsum fermentum placerat. Quisque nec mollis eros.</p>
					</div>
				</div>
			</div>
		</div>
			
	</div>
@endsection