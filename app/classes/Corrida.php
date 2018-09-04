<?php
class Corrida 
{
	private $arrayCarros;
	public function __construct($arrayCarros)
	{
		$this->arrayCarros = $arrayCarros;
		if(count($arrayCarros) > 0)
		{
			echo 'A corrida pode começar pois existe mais de um carro !<br /><br />';
		} else{
			echo 'A corrida não pode começar pois existe apenas um carro :( <br />';
			exit;
		}
	}
	public function iniciarCorrida()
	{
		echo 'Começando a corrida ...';
		echo '1, 2, 3 e JÁ!!.<br />';
		echo '- A corrida começou ! Confira a posição inicial de cada carro: ';
		echo '<hr>';
		$this->posicaoCarro();
		echo '<hr>';
	}

	public function ultrapassagem()
	{
		$quantidadeCarros = count($this->arrayCarros);
		$auxiliar = $this->arrayCarros[$quantidadeCarros - 1];
		
		for ($i = $quantidadeCarros -1; $i > 0 ; $i--) { 
			$this->arrayCarros[$i] = $this->arrayCarros[$i -1];
		}
		$this->arrayCarros[0] = $auxiliar;
		echo 'Aconteceu uma ultrapassagem';
		echo '<pre>';
		print_r($this->arrayCarros);
	}

	public function posicaoCarro()
	{
        $i = 1;
        foreach ($this->arrayCarros as $key => $value){
            echo '<pre>';
            echo 'Posição ['. $i++."]: ";
            print_r("Marca: " . $value['Marca'] . ", ");
            print_r("Ano: " . $value['Ano'] . ", ");
            print_r("Cor: " . $value['Cor'] . " ");
            //print_r($key);
        }

    }
}