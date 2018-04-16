<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NuevoMensajeContacto;
use Illuminate\Support\Facades\Mail;
use App\Contacto;
use Carbon\Carbon;

class ContactoController extends Controller
{
    public function contacto(Request $request){
    	$contacto = new Contacto();
    	$contacto->nombre = $request->nombre;
    	$contacto->apellido = $request->apellido;
    	$contacto->motivo = $request->motivo;
    	$contacto->mensaje = $request->mensaje;
    	$contacto->email = $request->email;
    	$contacto->fecha = Carbon::now();
    	$contacto->save();
    	Mail::to(env('MAIL_CLIENTE'))->send(new NuevoMensajeContacto($request));
        return redirect('/');
    }
}
