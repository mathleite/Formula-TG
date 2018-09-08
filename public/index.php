<?php 
require_once '../vendor/autoload.php';

$gol = new \App\mathleite\classes\Carro();
$fusca = new \App\mathleite\classes\Carro();
$tg = new \App\mathleite\classes\Carro();

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


$corrida = new \App\mathleite\classes\Corrida($arrayCarro);
//$corrida->iniciarCorrida();
$corrida->ultrapassagem();


