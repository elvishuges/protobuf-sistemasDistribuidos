<?php

declare(strict_types=1);

namespace Yuloh\Math;

class Calculadora implements CalculadoraInterface
{
    public function adicao(AdicaoRequest $request): AdicaoReply
    {
    	$sum = $request->getX() + $request->getY();

    	return (new AdicaoReply())->setSum($sum);
    }

    public function subtracao(\Yuloh\Math\SubtracaoRequest $request): SubtracaoReply
    {
    	$diff = $request->getX() - $request->getY();

    	return (new SubtracaoReply())->setDiff($diff);
    }
}

