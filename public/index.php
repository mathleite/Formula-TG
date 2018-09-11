<?php
require_once '../vendor/autoload.php';

$gol = new \App\mathleite\classes\Carro();
$fusca = new \App\mathleite\classes\Carro();
$tg = new \App\mathleite\classes\Carro();
$tg1 = new \App\mathleite\classes\Carro();
$tg2 = new \App\mathleite\classes\Carro();
$tg3 = new \App\mathleite\classes\Carro();

$gol->setCor("Rosa");
$gol->setMarca("TG");
$gol->setAno(1989);
$gol->setModelo("Sedan");

$fusca->setCor("Azul");
$fusca->setMarca("Wolks");
$fusca->setAno(2006);
$fusca->setModelo("4X4");

$tg->setCor("vermelho abacaxi");
$tg->setMarca("TG sedan");
$tg->setAno(2007);
$tg->setModelo("Flat");

$tg1->setCor("preto");
$tg1->setMarca("TG sedan");
$tg1->setAno(2098);
$tg1->setModelo("Flat");

$tg2->setCor("amarelo");
$tg2->setMarca("TG sedan");
$tg2->setAno(2098);
$tg2->setModelo("Flat");

$tg3->setCor("vermelho ");
$tg3->setMarca("TG sedan");
$tg3->setAno(2098);
$tg3->setModelo("Flat");


$arrayCarro = array(
	array(
		"Cor" => $gol->getCor(),
		"Marca" => $gol->getMarca(),
		"Modelo" => $gol->getModelo(),
		"Ano" => $gol->getAno()
	),
	array(
		"Cor" => $fusca->getCor(),
		"Marca" => $fusca->getMarca(),
		"Modelo" => $fusca->getModelo(),
		"Ano" => $fusca->getAno()
	),
	array(
		"Cor" => $tg->getCor(),
		"Marca" => $tg->getMarca(),
		"Modelo" => $tg->getModelo(),
		"Ano" => $tg->getAno()
	),
	array(
		"Cor" => $tg1->getCor(),
		"Marca" => $tg1->getMarca(),
		"Modelo" => $tg1->getModelo(),
		"Ano" => $tg1->getAno()
	),
	array(
		"Cor" => $tg2->getCor(),
		"Marca" => $tg2->getMarca(),
		"Modelo" => $tg2->getModelo(),
		"Ano" => $tg2->getAno()
	),
	array(
		"Cor" => $tg3->getCor(),
		"Marca" => $tg3->getMarca(),
		"Modelo" => $tg3->getModelo(),
		"Ano" => $tg3->getAno()
	)
);

//$posicao = new \App\mathleite\classes\Posicao(3, $arrayCarro);
//$anterior = $posicao->anterior();
//$atual = $posicao->atual();
//$proximo = $posicao->proximo();



$corrida = new \App\mathleite\classes\Corrida($arrayCarro);
//$corrida->posicaoCarro($arrayCarro);
//$corrida->iniciarCorrida();
$corrida->ultrapassagem(3);


