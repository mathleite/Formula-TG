<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/17/18
 * Time: 2:34 PM
 */

namespace App\mathleite\Exceptions;

use InvalidArgumentException;
use Throwable;

class FirstCarException extends InvalidArgumentException
{
	public function __construct()
	{
		parent::__construct("This is already the first car of the race");
	}

}