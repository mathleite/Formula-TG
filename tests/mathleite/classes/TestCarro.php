<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/12/18
 * Time: 8:41 AM
 */

namespace Tests\mathleite\classes;
use App\mathleite\classes\Car;
use PHPUnit\Framework\TestCase;

class TestCarro extends TestCase
{
	public function testColor()
	{
		$tg = new Car();
		$tg->setColor("Azul");
		$this->assertEquals("Azul", $tg->getColor());
	}

	public function testBrand()
	{
		$tg = new Car();
		$tg->setBrand("BMW");
		$this->assertEquals("BMW", $tg->getBrand());
	}

	public function testYear()
	{
		$tg = new Car();
		$tg->setYear(2006);
		$this->assertEquals(2006, $tg->getYear());
	}

	public function testModel()
	{
		$tg =  new Car();
		$tg->setModel("4 rodas");
		$this->assertEquals("4 rodas", $tg->getModel());
	}

}