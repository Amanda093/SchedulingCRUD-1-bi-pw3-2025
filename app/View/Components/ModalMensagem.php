<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalMensagem extends Component
{
    public $titulo;
    public $mensagem;
    public $voltar;

    public function __construct($titulo, $mensagem, $voltar = '/')
    {
        $this->titulo = $titulo;
        $this->mensagem = $mensagem;
        $this->voltar = $voltar;
    }

    public function render()
    {
        return view('components.modal-mensagem');
    }
}
