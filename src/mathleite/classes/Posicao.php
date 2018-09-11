<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/11/18
 * Time: 9:04 AM
 */

namespace App\mathleite\classes;

class Posicao
{
	private $current;
	private $arrayCarros;

	public function __construct($current, $arrayCarros)
	{
		$this->current = $current;
		$this->arrayCarros = $arrayCarros;
	}

	public function atual()
	{
		$atual = $this->arrayCarros[$this->current];
		print_r($atual);
		return $atual;
	}

	public function proximo()
	{
		if (array_key_exists($this->current + 1, $this->arrayCarros)) {
			$proximo = $this->arrayCarros[$this->current + 1];
			print_r($proximo);
			return $proximo;
		} else {
			print "Este carro é o último" . PHP_EOL;
		}
	}

	public function anterior()
	{
		if (array_key_exists($this->current - 1, $this->arrayCarros)) {
			$anterior = $this->arrayCarros[$this->current - 1];
			print_r($anterior);
			return $anterior;
		} else {
			print "Este é o primeiro carro, portanto não existe um anterior" . PHP_EOL;
		}

	}
}