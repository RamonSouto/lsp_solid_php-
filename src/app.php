<?php

declare(strict_types=1);

use Ramon\LspPratica\ArquivoSomenteEscrita;
use Ramon\LspPratica\ArquivoSomenteLeitura;
use Ramon\LspPratica\ArquivoTXT;
use Ramon\LspPratica\ArquivoTxtComFundoVermelho;
use Ramon\LspPratica\ExecutarArquivo;

require_once "./vendor/autoload.php";

$arquivoTXT = new ArquivoTXT();
$arquivoSomenteLeitura = new ArquivoSomenteLeitura();
$arquivoSomenteEscrita = new ArquivoSomenteEscrita();
$arquivoTxtComFundoVermelho = new ArquivoTxtComFundoVermelho();


$executarArquivo = new ExecutarArquivo();

$executarArquivo->executar($arquivoTxtComFundoVermelho);
