<?php

declare(strict_types=1);

namespace Ramon\LspPratica;

interface ArquivoEscreverInterface extends Arquivo
{
    public function escrever(): void;
}