<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/17/18
 * Time: 2:38 PM
 */

namespace App\mathleite\Exceptions;

use InvalidArgumentException;
use Throwable;

class RaceNotStartedException extends InvalidArgumentException
{
	public function __construct()
	{
		parent::__construct("The race did not started");
	}

}