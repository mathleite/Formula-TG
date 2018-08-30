<?php 
require 'classes/Carro.php';
require 'classes/Corrida.php';
$gol = new Carro();
$fusca = new Carro();
$tg = new Carro();
$gol->setCor("Rosa");
$gol->setMarca("Wolks");
$gol->setAno(2018);

$fusca->setCor("Azul");
$fusca->setMarca("Wolks");
$fusca->setAno(2018);

$tg->setCor("vermelho abacaxi");
$tg->setMarca("TG sedan");
$tg->setAno(2098);


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
				   ), 
				   array(
			 	   		"cor"=>$tg->getCor(),
						"Marca"=>$tg->getMarca(),
					    "Ano"=>$tg->getAno()
				   )
			  );

$corrida = new Corrida($arrayCarro);
$corrida->iniciarCorrida();
$corrida->ultrapassagem();
$corrida->ultrapassagem();


