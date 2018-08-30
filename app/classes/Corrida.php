<?php
class Corrida 
{
	private $arrayCarros;
	public function __construct($arrayCarros)
	{
		$this->arrayCarros = $arrayCarros;
		if(count($arrayCarros) > 1)
		{
			echo 'A corrida pode começar pois existe mais de um carro !<br /><br />';
		} else{
			echo 'A corrida não pode começar pois existe apenas um carro :( <br />';
			exit;
		}
	}
	public function iniciarCorrida()
	{
		echo 'Começando a corrida...';
		echo '1, 2, 3 e JÁ!! <br /><br />A corrida começou ! Confira a posição inicial de cada carros: ';
		echo '<pre />';
		print_r($this->arrayCarros);
	}

	public function ultrapassagem()
	{
		
	}

	public function finalizarCorrida()
	{
		
	}
}