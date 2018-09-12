<?php

namespace App\mathleite\classes;
use DeepCopy\Filter\KeepFilter;

class Corrida
{

	private $arrayCarros;

	public function __construct($arrayCarros)
	{
		$this->arrayCarros = $arrayCarros;

		if (count($arrayCarros) > 0) {
			echo 'A corrida pode começar pois existe mais de um carro !' . PHP_EOL;
		} else {
			echo 'A corrida não pode começar pois não existe a quantidade minima de carros :(' . PHP_EOL;
			exit;
		}
	}

	public function iniciarCorrida()
	{
		echo 'Começando a corrida ...' . PHP_EOL;
		echo '1, 2, 3 e JÁ!!.' . PHP_EOL;
		echo '- A corrida começou !' . PHP_EOL;
		echo PHP_EOL;
	}

	public function ultrapassagem($current)
	{
		if (array_key_exists($current, $this->arrayCarros)) {
			$atual = $this->arrayCarros[$current];
		} else {
			print "Este carro não existe" . PHP_EOL;
			return null;
		}

		if (array_key_exists($current + 1, $this->arrayCarros)) {
			$proximo = $this->arrayCarros[$current + 1];
		} else {
			print "Este é o ultimo carro :(" . PHP_EOL;
			return null;
		}

		if (array_key_exists($current - 1, $this->arrayCarros)) {
			$anterior = $this->arrayCarros[$current - 1];
		} else {
			print "Este é o primeiro carro, portanto não há carros para ultrapassar! xD" . PHP_EOL;
			return null;
		}

		$this->posicaoCarro();
		print $current . PHP_EOL;
		$retirado = $this->arrayCarros[$current];
		unset($this->arrayCarros[$current]);
		$this->posicaoCarro();
		echo PHP_EOL;
		if(in_array($anterior, $this->arrayCarros)){
			$this->arrayCarros[$current - 1] = $retirado;
		}
		$this->posicaoCarro();
		exit;

		$quantidadeCarros = count($this->arrayCarros);
		$auxiliar = $atual;

		for ($i = $this->arrayCarros[$atual]; $i > 0; $i--) {
			$this->arrayCarros[$i] = $this->arrayCarros[$i - 1];
		}
		$this->arrayCarros[1] = $auxiliar;
		echo 'Aconteceu uma ultrapassagem !' . PHP_EOL;
		$this->posicaoCarro($this->arrayCarros);
	}

	public function posicaoCarro()
	{
		$i = 1;
		foreach ($this->arrayCarros as $key => $value) {
			echo 'Posição [' . $i++ . "] => ";
			print_r("Marca: " . $value['Marca'] . ", ");
			print_r("Modelo: " . $value['Modelo'] . ", ");
			print_r("Ano: " . $value['Ano'] . ", ");
			print_r("Cor: " . $value['Cor'] . " " . PHP_EOL);
			echo PHP_EOL;
		}
	}
}