<?php
class Carro
{
	private $cor;
	private $marca;
	private $ano;

	public function getCor ()
	{
		return $this->cor;
	}
	public function setCor($cor)
	{
		$this->cor = $cor;
	}

	public function getMarca ()
	{
		return $this->marca;
	}
	public function setMarca($marca)
	{
		$this->marca = $marca;
	}

	public function getAno ()
	{
		return $this->ano;
	}
	public function setAno($ano)
	{
		$this->ano = $ano;
	}
}