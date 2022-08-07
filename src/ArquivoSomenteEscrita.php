<?php

declare(strict_types=1);

namespace Ramon\LspPratica;

use RuntimeException;

class ArquivoSomenteEscrita implements ArquivoEscreverInterface
{
    public function escrever(): void
    {
        echo "Lendo de arquivo Somente Leitura ..." . PHP_EOL;
    }
}