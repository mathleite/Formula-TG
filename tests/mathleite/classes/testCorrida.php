<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/12/18
 * Time: 8:51 AM
 */

namespace Tests\mathleite\classes;


use App\mathleite\classes\Posicao;
use phpDocumentor\Reflection\Types\Array_;
use PHPUnit\Framework\TestCase;

class testCorrida extends TestCase
{
	private $arrayTest = array(1, 2, 3, 4, 5);

	public function testPosicaoAtual()
	{

		$posicao = new Posicao(0, $this->arrayTest);
		$this->assertEquals(1, $posicao->atual());
	}

	public function testPosicaoProximo()
	{
		$posicao = new Posicao(4, $this->arrayTest);
		$this->assertEquals(null, $posicao->proximo());
	}

	public function testPosicaoAnterior()
	{
		$this->current =  $this->arrayTest[0];
		$posicao = new Posicao(0, $this->arrayTest);

		$this->assertEquals(null, $posicao->anterior());
		//$this->assertEquals(null, $posicaoZero->anterior());
	}
}