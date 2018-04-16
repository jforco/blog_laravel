@extends('templates.master2')

@section('titulo', 'Contacto')

@section('titulo-seccion', 'CONTACTO')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion menu-opcion-activo" href="{{ url('contacto') }}"><i class="fa fa-angle-right pr-2"></i>Cont&aacutectame</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<div class="row">
			<div class="col-sm-6">
				<p class="pequeño text-justify m-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed accumsan magna. Vivamus luctus elit quam. Proin cursus blandit lectus, sed vulputate lorem ultrices sit amet.</p>
			</div>
			<div class="col-sm-6">
				<form method="POST" action="{{ url('/contacto') }}" id="contacto">
					{{ csrf_field() }}
					<input type="text" class="form-control m-1" name="nombre" placeholder="Nombre" required>
					<input type="text" class="form-control m-1" name="apellido" placeholder="Apellido" required>
					<input type="text" class="form-control m-1" name="email" placeholder="Email" required>
					<input type="text" class="form-control m-1" name="motivo" placeholder="Motivo del contacto" required>
					<textarea name="mensaje" form="contacto" class="form-control m-1" placeholder="Mensaje"></textarea>
					<button type="submit" class="btn boton m-1">Enviar Mensaje</button>
				</form>
			</div>
		</div>
		<br>
	</div>
@endsection