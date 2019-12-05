<?php

declare(strict_types=1);

namespace Yuloh\Math;

class Server
{
	public function run(): void
	{
		$method = ltrim(rawurldecode($_SERVER['REQUEST_URI']), '/');

		switch ($method) {
			case 'adicao':
				$request = new AdicaoRequest();
				$request->mergeFromString(file_get_contents('php://input'));
				$reply = (new Calculadora())->adicao($request);				
				echo $reply->serializeToString();
				break;
			case 'subtracao':
				$request = new SubtracaoRequest();
				$request->mergeFromString(file_get_contents('php://input'));
				$reply = (new Calculadora())->subtracao($request);
				echo $reply->serializeToString();
				break;
			default:
				http_response_code(404);
		}
	}
}