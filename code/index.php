<?php 
require 'classes/Carro.php';
$carro = new Carro();
$gol = $carro->setCor("Azul");
$gol = $carro->setMarca("Wolks");
$gol = $carro->setAno(2018);

$exibir = array("cor"=>$carro->getCor(),
				"Marca"=>$gol = $carro->getMarca(),
				"Ano"=>$gol = $carro->getAno()
				);
print_r($exibir);
