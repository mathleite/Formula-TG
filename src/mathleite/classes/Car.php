<?php

namespace App\mathleite\classes;

class Car
{
	public $color;
	public $brand;
	public $year;
	public $model;

	/**
	 * @return mixed
	 */
	public function getModel()
	{
		return $this->model;
	}

	/**
	 * @param mixed $model
	 */
	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
	}

	public function getYear()
	{
		return $this->year;
	}

	public function setYear($year)
	{
		$this->year = $year;
	}
}
