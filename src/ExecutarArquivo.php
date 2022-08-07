<?php

declare(strict_types=1);

namespace Ramon\LspPratica;

class ExecutarArquivo
{
    public function executar(Arquivo $arquivo): void
    {
        
        if ($arquivo instanceof ArquivoLerInterface)
        {
            $arquivo->ler();
        }

        if($arquivo instanceof ArquivoEscreverInterface){
            $arquivo->escrever();
        }
    }
}


