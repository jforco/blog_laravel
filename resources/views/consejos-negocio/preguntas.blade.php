@extends('templates.master2')

@section('titulo', 'Preguntas Frecuentes')

@section('titulo-seccion', 'PREGUNTAS FRECUENTES')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion" href="{{ url('consejos-negocio') }}"><i class="fa fa-angle-right pr-2"></i>Consejos de Negocio</a>
	<a class="menu-opcion" href="{{ url('guia-negocio') }}"><i class="fa fa-angle-right pr-2"></i>Guia de negocios</a>
	<a class="menu-opcion menu-opcion-ultimo menu-opcion-activo" href="{{ url('preguntas-frecuentes') }}"><i class="fa fa-angle-right pr-2"></i>Preguntas Frecuentes</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<div id="accordion">
			<div class="card">
			    <div class="card-header p-0" id="headingOne">
				    <p class="m-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				        	<p class="colorPrincipal pregunta m-0">1. ¿Pregunta 1?</p>
				        </button>
				    </p>
			    </div>

			    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body pt-1">
				        <p class="pequeño m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. </p> 
				    </div>
			    </div>
			</div>
			<div class="card">
			    <div class="card-header p-0" id="headingTwo">
				    <p class="m-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				        	<p class="colorPrincipal pregunta m-0">2. ¿Pregunta 2?</p>
				        </button>
				    </p>
			    </div>
			    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				    <div class="card-body pt-1">
				        <p class="pequeño m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. </p> 
				    </div>
			    </div>
			</div>
			<div class="card">
			    <div class="card-header p-0" id="headingThree">
				    <p class="m-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				        	<p class="colorPrincipal pregunta m-0">3. ¿Pregunta 3?</p>
				        </button>
				    </p>
			    </div>
			    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body pt-1">
				        <p class="pequeño m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. </p> 
				    </div>
			    </div>
			</div>
		</div>
		<br>
	</div>
@endsection