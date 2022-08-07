<?php

declare(strict_types=1);

namespace Ramon\LspPratica;

class ArquivoTXT implements ArquivoEscreverInterface, ArquivoLerInterface
{
    
    public function ler(): void
    {
        echo "Lendo de arquivo TXT ..." . PHP_EOL;
    }
    
    public function escrever(): void
    {
        echo "Escrevendo arquivo TXT ..." . PHP_EOL;   
    }
}
