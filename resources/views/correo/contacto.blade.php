<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
    </head>
    <style type="text/css">
    	
    </style>
    <body>
    	<h3>Contacto nuevo!</h3>
    	<br>
    	<h5>{{$nombre}} {{$apellido}} te ha enviado un mensaje:</h5>
    	<br>
        <p>Motivo: {{$motivo}}</p>
    	<p>{{$mensaje}}</p>
    	<strong>---Fin de Mensaje---</strong>
    	<p>Puedes responderle enviando un correo a la siguiente direccion:</p>
    	<h3>{{$correo}}</h3>
    </body>
</html>