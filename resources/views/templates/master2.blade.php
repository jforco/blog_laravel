@extends('templates.master')

@section('body')

<section class="contenedor-central2">
    <div class="fondo-imagen" style="background-image: url('..@yield('style-bg-imagen')')" !important;>
		<div>
			<br><br><br><br><br>
			<div class="row no-gutters">
				<div class="col-9 offset-3">
					<div class="titulo-seccion">
						<p class="text-white px-3 py-2 my-0 h5">@yield('titulo-seccion')</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contenedor-central2">
	<div class="row no-gutters">
		<div class="col-3 py-4">
			<nav class="nav flex-column ">
				@yield('menu-seccion')
			</nav>
		</div>
		<div class="col-9">
			@yield('contenido-seccion')
		</div>
	</div>
</section>

@endsection
