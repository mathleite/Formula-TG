<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/17/18
 * Time: 2:29 PM
 */

namespace App\mathleite\Exceptions;

use InvalidArgumentException;

class CarDoesntExistsException extends InvalidArgumentException
{
	public function __construct()
	{
		parent::__construct("This car doesn't exists");
	}

}