<?php

declare(strict_types=1);

namespace Ramon\LspPratica;

interface ArquivoLerInterface extends Arquivo
{
    public function ler(): void;

}