<?php
namespace App\mathleite\classes;
class Corrida 
{
	private $arrayCarros;
	public function __construct($arrayCarros)
	{
		$this->arrayCarros = $arrayCarros;

		if(count($arrayCarros) > 0)
		{
			echo 'A corrida pode começar pois existe mais de um carro !'.PHP_EOL;
			echo 'Esta é a posição inicial de cada carro:'.PHP_EOL;
			$this->posicaoCarro();
		} else {
			echo 'A corrida não pode começar pois existe apenas um carro :('.PHP_EOL;
			exit;
		}
	}
	public function iniciarCorrida()
	{
		echo 'Começando a corrida ...'.PHP_EOL;
		echo '1, 2, 3 e JÁ!!.' .PHP_EOL;
		echo '- A corrida começou !'.PHP_EOL;
		echo PHP_EOL;

	}

	public function ultrapassagem()
	{
			$quantidadeCarros = count($this->arrayCarros);
			$auxiliar = $this->arrayCarros[$quantidadeCarros - 1];

			for ($i = $quantidadeCarros - 1; $i > 0; $i--) {
				$this->arrayCarros[$i] = $this->arrayCarros[$i - 1];
			}
			$this->arrayCarros[0] = $auxiliar;
			echo 'Aconteceu uma ultrapassagem !' . PHP_EOL;
			$this->posicaoCarro();
	}

	public function posicaoCarro()
	{
        $i = 1;
        foreach ($this->arrayCarros as $key => $value){
            echo 'Posição ['. $i++."] => ";
            print_r("Marca: " . $value['Marca'] . ", ");
            print_r("Modelo: " . $value['Modelo'] . ", ");
            print_r("Ano: " . $value['Ano'] . " ");
	        print_r("Cor: " . $value['Cor'] . " " .PHP_EOL);
	        echo PHP_EOL;
        }
    }

    public function finalizarCorrida()
    {

    }
}