<?php

declare(strict_types=1);

namespace Ramon\LspPratica;

class ArquivoTxtComFundoVermelho extends ArquivoTXT
{
    public function escrever(): void
    {
        echo "Escrevendo arquivo de texto com fundo vermelho.";
    }
}
