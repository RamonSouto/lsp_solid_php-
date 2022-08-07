<?php

declare(strict_types=1);

namespace Ramon\LspPratica;

use RuntimeException;

class ArquivoSomenteLeitura implements ArquivoLerInterface
{
    public function ler(): void
    {
        echo "Lendo de arquivo Somente Leitura ..." . PHP_EOL;
    }
}