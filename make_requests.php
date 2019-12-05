<?php

use Yuloh\Math\AdicaoRequest;
use Yuloh\Math\CalculadoraClient;
use Yuloh\Math\SubtracaoRequest;

require __DIR__ . '/vendor/autoload.php';

$calculadora = new CalculadoraClient();

$req   = (new AdicaoRequest())->setX(1)->setY(4);
$reply = $calculadora->adicao($req);

echo '1 + 4 = ' . $reply->getSum() . PHP_EOL;
$req   = (new SubtracaoRequest())->setX(5)->setY(4);
$reply = $calculadora->subtracao($req);

echo '5 - 4 = ' . $reply->getDiff() . PHP_EOL;