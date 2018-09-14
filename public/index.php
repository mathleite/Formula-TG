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

$gol->setColor("Pink");
$gol->setBrand("TG");
$gol->setYear(1989);
$gol->setModel("Sedan");

$fusca->setColor("Gray");
$fusca->setBrand("Wolks");
$fusca->setYear(2006);
$fusca->setModel("4X4");

$tg->setColor("Pineapple-red");
$tg->setBrand("TG sedan");
$tg->setYear(2007);
$tg->setModel("Flat");

$tg1->setColor("Black");
$tg1->setBrand("TG sedan");
$tg1->setYear(2098);
$tg1->setModel("Flat");

$tg2->setColor("Yellow");
$tg2->setBrand("TG sedan");
$tg2->setYear(2098);
$tg2->setModel("Flat");

$tg3->setColor("Red");
$tg3->setBrand("TG sedan");
$tg3->setYear(2098);
$tg3->setModel("Flat");

$tg4->setColor("Purple");
$tg4->setBrand("TG sedan");
$tg->setYear(2098);
$tg4->setModel("Flat");

$tg5->setColor("green");
$tg5->setBrand("TG sedan");
$tg5->setYear(2098);
$tg5->setModel("Flat");

$tg6->setColor("Orange");
$tg6->setBrand("TG sedan");
$tg6->setYear(2098);
$tg6->setModel("Flat");

$arrayCarro = array($gol, $fusca, $tg, $tg1, $tg2, $tg3, $tg4, $tg5, $tg6);
$race = new \App\mathleite\classes\Race($arrayCarro);
$race->startRace();
$race->overtaking(1);
$race->overtaking(0);
$race->finishRace();

