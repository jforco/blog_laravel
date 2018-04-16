@extends('templates.master')

@section('titulo', 'Entradas del Blog')

@section('body')

	<div class="contenedor-central">
		<div class="row py-4">
			<div class="col-sm-9">
				<div class="row no-gutters">
					@forelse ($entradas as $entrada)
		    		<div class="col-sm-6 col-lg-4 mb-3">
		    			<div class="pr-3">
		    				<div class="card">
		                        <img width="100%" src="{{ Voyager::image(str_replace('.jpg','-cropped.jpg', $entrada->image)) }}">
		                        <div class="card-body">
		                            <h5 class="card-title">{{ $entrada->title }}</h5>
		                            <p class="small text-justify">{{ substr($entrada->excerpt, 0, 100) }}...</p>
		                            <a href="{{ url('/blog/' . $entrada->slug ) }}" class="btn btn-primary py-0 px-1"><small>Leer mas...</small></a>
		                        </div>
		                    </div>
		    			</div>
		    		</div>
					@empty
					<br>
					<p>No hay entradas aun.</p>
					<br>
					@endforelse
					<br>
					{{ $entradas->links() }}
				</div>
			</div>	
			<div class="col-sm-3">
				@include('facebook')
			</div>
		</div>

				
	</div>

	<div id="fb-root"></div>
	<script>
	    (function(d, s, id) {
	        var js, fjs = d.getElementsByTagName(s)[0];
	        if (d.getElementById(id)) return;
	        js = d.createElement(s); js.id = id;
	        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12&appId=175543323021297';
	        fjs.parentNode.insertBefore(js, fjs);
	    }   (document, 'script', 'facebook-jssdk'));
	</script>

@endsection