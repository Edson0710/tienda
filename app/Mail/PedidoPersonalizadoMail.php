<?php

namespace App\Mail;

use App\Models\Pedido;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PedidoPersonalizadoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $id;
    public $asunto;
    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id, $asunto, $mensaje)
    {
        $this->id = $id;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pedido = Pedido::find($this->id);
        return $this->from('edson@mail.com')
        ->subject($this->asunto)
        ->view('admin.correos.personalizado', [
            'pedido' => $pedido,
            'asunto' => $this->asunto,
            'mensaje' => $this->mensaje
        ]);
    }
}
