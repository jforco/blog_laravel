@extends('templates.master')

@section('titulo')
{{ $evento->title }}
@endsection

@section('body')
	<div class="contenedor-central">
		<a href="{{ url('/eventos') }}"><button class="btn fondo my-3 p-1 text-white">Volver Atras</button></a>
		<div class="row">
			<div class="col-sm-9">
				<h2 class="text-left m-0">{{ $evento->title }}</h2>
			    <small class="text-muted">Publicado el {{ $fecha }}</small>
			    <br>
			    <img class="my-2" src="{{ Voyager::image( $evento->image ) }}" width="100%">
			    <br>
			    <div class="text-justify pequeño">{!! $evento->body !!}</div>
			</div>	
			<div class="col-sm-3">
				<br><br><br>
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