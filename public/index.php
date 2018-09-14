<?php
require_once '../vendor/autoload.php';

$gol = new \App\mathleite\classes\Car();
$fusca = new \App\mathleite\classes\Car();
$tg = new \App\mathleite\classes\Car();
$tg1 = new \App\mathleite\classes\Car();
$tg2 = new \App\mathleite\classes\Car();
$tg3 = new \App\mathleite\classes\Car();
$tg4 = new \App\mathleite\classes\Car();
$tg5 = new \App\mathleite\classes\Car();
$tg6 = new \App\mathleite\classes\Car();

$gol->setColor("Rosa");
$gol->setBrand("TG");
$gol->setYear(1989);
$gol->setModel("Sedan");

$fusca->setColor("Azul");
$fusca->setBrand("Wolks");
$fusca->setYear(2006);
$fusca->setModel("4X4");

$tg->setColor("vermelho abacaxi");
$tg->setBrand("TG sedan");
$tg->setYear(2007);
$tg->setModel("Flat");

$tg1->setColor("preto");
$tg1->setBrand("TG sedan");
$tg1->setYear(2098);
$tg1->setModel("Flat");

$tg2->setColor("amarelo");
$tg2->setBrand("TG sedan");
$tg2->setYear(2098);
$tg2->setModel("Flat");

$tg3->setColor("vermelho");
$tg3->setBrand("TG sedan");
$tg3->setYear(2098);
$tg3->setModel("Flat");

$tg4->setColor("roxo");
$tg4->setBrand("TG sedan");
$tg->setYear(2098);
$tg4->setModel("Flat");

$tg5->setColor("verde");
$tg5->setBrand("TG sedan");
$tg5->setYear(2098);
$tg5->setModel("Flat");

$tg6->setColor("laranja");
$tg6->setBrand("TG sedan");
$tg6->setYear(2098);
$tg6->setModel("Flat");

$arrayCarro = array(
	array(
		"Color" => $gol->getColor(),
		"Brand" => $gol->getBrand(),
		"Model" => $gol->getModel(),
		"Year" => $gol->getYear()
	),
	array(
		"Color" => $fusca->getColor(),
		"Brand" => $fusca->getBrand(),
		"Model" => $fusca->getModel(),
		"Year" => $fusca->getYear()
	),
	array(
		"Color" => $tg->getColor(),
		"Brand" => $tg->getBrand(),
		"Model" => $tg->getModel(),
		"Year" => $tg->getYear()
	),
	array(
		"Color" => $tg1->getColor(),
		"Brand" => $tg1->getBrand(),
		"Model" => $tg1->getModel(),
		"Year" => $tg1->getYear()
	),
	array(
		"Color" => $tg2->getColor(),
		"Brand" => $tg2->getBrand(),
		"Model" => $tg2->getModel(),
		"Year" => $tg2->getYear()
	),
	array(
		"Color" => $tg3->getColor(),
		"Brand" => $tg3->getBrand(),
		"Model" => $tg3->getModel(),
		"Year" => $tg3->getYear()
	),
	array(
		"Color" => $tg4->getColor(),
		"Brand" => $tg4->getBrand(),
		"Model" => $tg4->getModel(),
		"Year" => $tg4->getYear()
	),
	array(
		"Color" => $tg5->getColor(),
		"Brand" => $tg5->getBrand(),
		"Model" => $tg5->getModel(),
		"Year" => $tg5->getYear()
	),
	array(
		"Color" => $tg6->getColor(),
		"Brand" => $tg6->getBrand(),
		"Model" => $tg6->getModel(),
		"Year" => $tg6->getYear()
	)
);
$race = new \App\mathleite\classes\Race($arrayCarro);
$race->startRace();
$race->overtaking(1);
$race->overtaking(0);
$podium = $race->overtaking(2);
$race->finishRace();



