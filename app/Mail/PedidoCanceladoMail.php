<?php

namespace App\Mail;

use App\Models\Pedido;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PedidoCanceladoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
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
        ->subject('Pedido cancelado')
        ->view('admin.correos.cancelado', [
            'pedido' => $pedido,
        ]);
    }
}
