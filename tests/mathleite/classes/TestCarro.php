<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/12/18
 * Time: 8:41 AM
 */

namespace Tests\mathleite\classes;
use App\mathleite\classes\Carro;
use PHPUnit\Framework\TestCase;

class TestCarro extends TestCase
{
	public function testCor()
	{
		$tg = new Carro();
		$tg->setCor("Azul");
		$this->assertEquals("Azul", $tg->getCor());
	}

	public function testMarca()
	{
		$tg = new Carro();
		$tg->setMarca("BMW");
		$this->assertEquals("BMW", $tg->getMarca());
	}

	public function testAno()
	{
		$tg = new Carro();
		$tg->setAno(2006);
		$this->assertEquals(2006, $tg->getAno());
	}

	public function testModelo()
	{
		$tg =  new Carro();
		$tg->setModelo("4 rodas");
		$this->assertEquals("4 rodas", $tg->getModelo());
	}

}