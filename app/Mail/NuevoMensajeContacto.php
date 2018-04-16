<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class NuevoMensajeContacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $request;

    public function __construct(Request $request)
    {
        //
        $this->request = $request;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->request->nombre .' te ha mandado un mensaje')
                    ->view('correo.contacto')
                    ->with([
                        'nombre' => $this->request->nombre,
                        'apellido' => $this->request->apellido,
                        'motivo' => $this->request->motivo,
                        'mensaje' => $this->request->mensaje,
                        'correo' => $this->request->email,
                    ]);
    }
}
