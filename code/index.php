<?php
require 'Carro.php';
require 'Corrida.php';

$gol = new Carro();
$gol->setCor("Azul");
$gol->setMarca("TG");
$gol->setAno(2018);

$fusca = new Carro();
$fusca->setCor("Preto");
$fusca->setMarca("TG");
$fusca->setAno(2015);


echo '<pre>';

$exibir = array(
                array("cor"=>$gol->getCor(),
				"Marca"=>$gol->getMarca(),
				"Ano"=>$gol->getAno()
                ),
                array("cor"=>$fusca->getCor(),
            	       "Marca"=>$fusca->getMarca(),
            		    "Ano"=>$fusca->getAno()
                )
            );
print_r($exibir);
echo '<hr />';

$corrida = new Corrida($exibir);
$corrida->comecarCorrida();
