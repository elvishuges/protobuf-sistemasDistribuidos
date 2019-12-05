<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/math.proto

namespace Yuloh\Math;

/**
 * Protobuf type <code>yuloh.math.Calculadora</code>
 */
interface CalculadoraInterface
{
    /**
     * Method <code>add</code>
     *
     * @param \Yuloh\Math\AdicaoRequest $request
     * @return \Yuloh\Math\AdicaoReply
     */
    public function adicao(\Yuloh\Math\AdicaoRequest $request);

    /**
     * Method <code>subtracao</code>
     *
     * @param \Yuloh\Math\SubtracaoRequest $request
     * @return \Yuloh\Math\SubtracaoReply
     */
    public function subtracao(\Yuloh\Math\SubtracaoRequest $request);

}
