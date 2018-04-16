@extends('templates.master2')

@section('titulo', 'Acerca de Luis')

@section('titulo-seccion', 'ACERCA DE LUIS')

@section('style-bg-imagen', '/img/moto1.jpg')
	


@section('menu-seccion')
	
	<a class="menu-opcion menu-opcion-activo" href="{{ url('acerca-de') }}"><i class="fa fa-angle-right pr-2"></i>Acerca de Luis</a>
	<a class="menu-opcion" href="{{ url('acerca-de/hechos-divertidos') }}"><i class="fa fa-angle-right pr-2"></i>Hechos divertidos</a>
	<a class="menu-opcion menu-opcion-ultimo" href="{{ url('galeria-fotos') }}"><i class="fa fa-angle-right pr-2"></i>Galeria de Fotos</a>
	
@endsection


@section('contenido-seccion')
	<div class="p-3">
		<h4>Biografia de Luis Vargas</h4>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="temprano" role="tabpanel" aria-labelledby="tab1">
				<div class="img-fondo1">
					<div class="row align-items-center px-3 py-5" style="background-color: rgba(255,255,255,0.7);">
						<div class="col-sm-5">
							<img width="100%" class="img-thumbnail" src="{{ asset('img/b1.jpg') }}">
						</div>
						<div class="col-sm-7">
							<div class="fondo text-white d-inline-flex px-1">Primeros años</div>
							<p class="small m-1 text-justify">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dui felis, pellentesque quis aliquam ut, vestibulum non arcu. Proin id pulvinar turpis, rhoncus pellentesque lacus. Vivamus et dignissim nibh, vel ullamcorper purus. Quisque vehicula libero libero. Phasellus vestibulum luctus libero quis auctor. Vivamus sit amet velit id elit sollicitudin dictum nec vitae massa. Proin at erat leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse convallis cursus lacus sed luctus.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="profesional" role="tabpanel" aria-labelledby="tab2">
				<div class="img-fondo2">
					<div class="row align-items-center px-3 py-5" style="background-color: rgba(255,255,255,0.8);">
						<div class="col-sm-5">
							<img width="100%" class="img-thumbnail" src="{{ asset('img/b2.jpg') }}">
						</div>
						<div class="col-sm-7">
							<div class="fondo text-white d-inline-flex px-1">Joven Profesional</div>
							<p class="small m-1 text-justify">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dui felis, pellentesque quis aliquam ut, vestibulum non arcu. Proin id pulvinar turpis, rhoncus pellentesque lacus. Vivamus et dignissim nibh, vel ullamcorper purus. Quisque vehicula libero libero. Phasellus vestibulum luctus libero quis auctor. Vivamus sit amet velit id elit sollicitudin dictum nec vitae massa. Proin at erat leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse convallis cursus lacus sed luctus.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="emprendedor" role="tabpanel" aria-labelledby="tab3">
				<div class="img-fondo3">
					<div class="row align-items-center px-3 py-5" style="background-color: rgba(255,255,255,0.8);">
						<div class="col-sm-5">
							<img width="100%" class="img-thumbnail" src="{{ asset('img/b3.jpg') }}">
						</div>
						<div class="col-sm-7">
							<div class="fondo text-white d-inline-flex px-1">El Emprendedor</div>
							<p class="small m-1 text-justify">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dui felis, pellentesque quis aliquam ut, vestibulum non arcu. Proin id pulvinar turpis, rhoncus pellentesque lacus. Vivamus et dignissim nibh, vel ullamcorper purus. Quisque vehicula libero libero. Phasellus vestibulum luctus libero quis auctor. Vivamus sit amet velit id elit sollicitudin dictum nec vitae massa. Proin at erat leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse convallis cursus lacus sed luctus.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="futuro" role="tabpanel" aria-labelledby="tab4">
				<div class="img-fondo4">
					<div class="row align-items-center px-3 py-5" style="background-color: rgba(255,255,255,0.6);">
						<div class="col-sm-5">
							<img width="100%" class="img-thumbnail" src="{{ asset('img/b4.jpg') }}">
						</div>
						<div class="col-sm-7">
							<div class="fondo text-white d-inline-flex px-1">El Futuro</div>
							<p class="small m-1 text-justify">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dui felis, pellentesque quis aliquam ut, vestibulum non arcu. Proin id pulvinar turpis, rhoncus pellentesque lacus. Vivamus et dignissim nibh, vel ullamcorper purus. Quisque vehicula libero libero. Phasellus vestibulum luctus libero quis auctor. Vivamus sit amet velit id elit sollicitudin dictum nec vitae massa. Proin at erat leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse convallis cursus lacus sed luctus.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<ul class="nav p-1" id="myTab" role="tablist">
			<li class="nav-item col-6 col-sm-4 col-md-3 m-0 p-0">
			    <a class="nav-link-bio active" id="tab1" data-toggle="tab" href="#temprano" role="tab" aria-selected="true"><p class="text-center m-0">Primeros años</p></a>
			</li>
			<li class="nav-item col-6 col-sm-4 col-md-3 m-0 p-0">
			    <a class="nav-link-bio" id="tab2" data-toggle="tab" href="#profesional" role="tab" aria-selected="false"><p class="text-center m-0">Joven Profesional</p></a>
			</li>
			<li class="nav-item col-6 col-sm-4 col-md-3 m-0 p-0">
			    <a class="nav-link-bio" id="tab3" data-toggle="tab" href="#emprendedor" role="tab" aria-selected="false"><p class="text-center m-0">El Emprendedor</p></a>
			</li>
			<li class="nav-item col-6 col-sm-4 col-md-3 m-0 p-0">
			    <a class="nav-link-bio" id="tab4" data-toggle="tab" href="#futuro" role="tab" aria-selected="false"><p class="text-center m-0">El futuro</p></a>
			</li>
		</ul>
		<br>
	</div>
@endsection



