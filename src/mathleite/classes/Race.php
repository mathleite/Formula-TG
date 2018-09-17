<?php

namespace App\mathleite\classes;

use App\mathleite\Exceptions\CarDoesntExistsException;
use App\mathleite\Exceptions\FirstCarException;
use App\mathleite\Exceptions\LessThanTwoCarsException;
use App\mathleite\Exceptions\RaceNotStartedException;

class Race
{

	/**
	 * @var array
	 */
	private $cars;
	/**
	 * @var bool
	 */
	private $startRace = false;

	public function __construct(array $cars)
	{
		$this->validateCars($cars);

		$this->cars = $cars;
	}

	/**
	 * @param array $cars
	 */
	private function validateCars(array $cars): void
	{
		if (count($cars) > 1) {
			return;
		}

		throw new LessThanTwoCarsException();
	}

	/**
	 *
	 */
	public function startRace(): void
	{
		$this->startRace = true;

		echo '1, 2, 3 and GOO!!.' . PHP_EOL;
		echo  "The race started !" . PHP_EOL;
	}

	/**
	 * @param int $current
	 * @return array|null
	 */
	public function overtaking(int $current): ?array
	{
		if ($this->startRace == true) {
			if (array_key_exists($current, $this->cars)) {
				$atual = $this->cars[$current];
			} else {
				throw new CarDoesntExistsException();
			}

			if (array_key_exists($current - 1, $this->cars)) {
				$previous = $this->cars[$current - 1];
			} else {
				throw new FirstCarException();
			}
			$return = $this->listOvertaking($previous, $atual);
			return $return;
		} else {
			throw new RaceNotStartedException();
		}
	}

	/**
	 * @param object $previous
	 * @param object $atual
	 * @return array
	 */
	public function listOvertaking(object $previous, object $atual): array
	{
		$helper = [];

		for ($i = 0; $i < count($this->cars); $i++) {
			if ($this->cars[$i] === $previous) {
				array_push($helper, $this->cars[$i + 1]);

			} else if ($this->cars[$i] === $atual) {

				array_push($helper, $this->cars[$i - 1]);

			} else {

				array_push($helper, $this->cars[$i]);
			}
		}
		print 'Happened a overtaking!' . PHP_EOL;
		print 'The following car does a overtaking: ' . PHP_EOL;
		print '-------------------------------------------------------------------' . PHP_EOL;
		$this->listOneCar($atual);
		print '-------------------------------------------------------------------' . PHP_EOL;
		$this->cars = $helper;
		print PHP_EOL;
		$this->listCar($helper);
		return $helper;
	}

	/**
	 * @param array $helper
	 */
	public function listCar(array $helper): void
	{
		foreach ($helper as $key => $value) {
			$position = $key + 1;
			echo "Position [{$position}] => ";
			print_r("Color: " . $value->getColor() . ", ");
			print_r("brand: " . $value->getBrand() . ", ");
			print_r("model: " . $value->getModel() . ", ");
			print_r("year: " . $value->getYear());
			echo PHP_EOL;
			echo PHP_EOL;
		}
	}

	/**
	 *
	 */
	public function finishRace(): void
	{
		$podium = $this->cars;
		print 'The winners are: ' . PHP_EOL;
		$helper = [];

		for ($i = 0; $i < 3; $i++) {
			array_push($helper, $podium[$i]);
		}
		$this->listCar($helper);
	}

	/**
	 * @param object $car
	 * @return object
	 */
	public function listOneCar(object $car): object
	{
		foreach ($car as $key => $value) {
			print_r($key . ": " . $value . ", ");
		}
		print PHP_EOL;
		return $car;
	}
}

