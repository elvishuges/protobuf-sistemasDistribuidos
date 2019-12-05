<?php

declare(strict_types=1);

namespace Yuloh\Math;

use Google\Protobuf\Internal\Message;

class CalculadoraClient implements CalculadoraInterface
{
    public function adicao(AdicaoRequest $request): AdicaoReply
    {
    	$reply = new AdicaoReply();
    	$reply->mergeFromString($this->makeRequest($request, 'adicao'));

    	return $reply;
    }


    public function subtracao(SubtracaoRequest $request): SubtracaoReply
    {
    	$reply = new SubtracaoReply();
    	$reply->mergeFromString($this->makeRequest($request, 'subtracao'));

    	return $reply;
    }

    private function makeRequest(Message $message, string $method): string
    {
    	$body = $message->serializeToString();

    	$ch = curl_init("http://localhost:8000/{$method}");

    	curl_setopt_array($ch, [
    		CURLOPT_RETURNTRANSFER => true,
    		CURLOPT_POST           => true,
    		CURLOPT_POSTFIELDS     => $body,
    	]);

    	$response = curl_exec($ch);

    	curl_close($ch);

    	return $response;
    }
}