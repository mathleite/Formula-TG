<?php 
require 'classes/Carro.php';
require 'classes/Corrida.php';
$gol = new Carro();
$fusca = new Carro();
$tg = new Carro();

$gol->setCor("Rosa");
$gol->setMarca("Wolks");
$gol->setAno(2018);
$gol->setModelo("Sedan");

$fusca->setCor("Azul");
$fusca->setMarca("Wolks");
$fusca->setAno(2018);
$fusca->setModelo("4X4");

$tg->setCor("vermelho abacaxi");
$tg->setMarca("TG sedan");
$tg->setAno(2098);
$tg->setModelo("Flat");


$arrayCarro = array(
				   array(
				   		"Cor"=>$gol->getCor(),
						"Marca"=>$gol->getMarca(),
						"Modelo"=>$gol->getModelo(),
						"Ano"=>$gol->getAno()
				   ),
			 	   array(
			 	   		"Cor"=>$fusca->getCor(),
						"Marca"=>$fusca->getMarca(),
				       "Modelo"=>$fusca->getModelo(),
					    "Ano"=>$fusca->getAno()
				   ),
				   array(
			 	   		"Cor"=>$tg->getCor(),
						"Marca"=>$tg->getMarca(),
					   "Modelo"=>$tg->getModelo(),
					    "Ano"=>$tg->getAno()
				   )
			  );


$corrida = new Corrida($arrayCarro);
//$corrida->iniciarCorrida();
$corrida->ultrapassagem();


