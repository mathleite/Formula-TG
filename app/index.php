<?php 
require 'classes/Carro.php';
require 'classes/Corrida.php';
$gol = new Carro();
$fusca = new Carro();

$gol->setCor("Rosa");
$gol->setMarca("Wolks");
$gol->setAno(2018);

$fusca->setCor("Azul");
$fusca->setMarca("Wolks");
$fusca->setAno(2018);

$arrayCarro = array(
				   array(
				   		"cor"=>$gol->getCor(),
						"Marca"=>$gol->getMarca(),
						"Ano"=>$gol->getAno()
				   ),
			 	   array(
			 	   		"cor"=>$fusca->getCor(),
						"Marca"=>$fusca->getMarca(),
					    "Ano"=>$fusca->getAno()
				   )
			  );

$corrida = new Corrida($arrayCarro);
$corrida->iniciarCorrida();
echo '<hr>';
