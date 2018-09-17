<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/17/18
 * Time: 2:15 PM
 */

namespace App\mathleite\Exceptions;

use InvalidArgumentException;

class LessThanTwoCarsException extends InvalidArgumentException
{
	public function __construct()
	{
		parent::__construct("The race can not be created");
	}
}