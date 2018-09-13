<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/13/18
 * Time: 2:21 PM
 */

namespace Tests\mathleite\classes;


use App\mathleite\classes\Car;
use App\mathleite\classes\Race;
use PHPUnit\Framework\Constraint\IsType;
use PHPUnit\Framework\TestCase;

class TestCorrida extends TestCase
{

	public function testListOneCar()
	{
		$car = new Car();
		$car->setColor("laranja");
		$car->setBrand("TG sedan");
		$car->setYear(2098);
		$car->setModel("Flat");

		$arr = array(
			"Cor" => $car->getColor(),
			"Marca" => $car->getBrand(),
			"Modelo" => $car->getModel(),
			"Ano" => $car->getYear());
		$race = new Race($arr);

		$this->assertInternalType(IsType::TYPE_ARRAY, $race->listOneCar($arr));

	}
}