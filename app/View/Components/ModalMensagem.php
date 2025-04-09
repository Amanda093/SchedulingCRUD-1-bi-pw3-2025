<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalMensagem extends Component
{
    public $mensagem;
    public $voltar;

    public function __construct($mensagem, $voltar = '/')
    {
        $this->mensagem = $mensagem;
        $this->voltar = $voltar;
    }

    public function render()
    {
        return view('components.modal-mensagem');
    }
}
