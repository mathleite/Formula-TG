<?php

namespace App\mathleite\classes;

use App\mathleite\Exceptions\CarDoesntExistsException;
use App\mathleite\Exceptions\FirstCarException;
use App\mathleite\Exceptions\LessThanTwoCarsException;
use App\mathleite\Exceptions\RaceNotStartedException;

class Race
{

	private $arrayCars;
	private $startRace = false;

	public function __construct(array $arrayCars)
	{
		$this->validateCars($arrayCars);

		$this->arrayCars = $arrayCars;
	}

	private function validateCars(array $cars): void
	{
		if (count($cars) > 1) {
			return;
		}

		throw new LessThanTwoCarsException();
	}

	public function startRace(): void
	{
		$this->startRace = true;
		echo 'Starting the race ...' . PHP_EOL;
		echo '1, 2, 3 and GOO!!.' . PHP_EOL;
		echo '- The race started !' . PHP_EOL;
		echo PHP_EOL;

	}

	public function overtaking(int $current): ?array
	{
		if ($this->startRace == true) {
			if (array_key_exists($current, $this->arrayCars)) {
				$atual = $this->arrayCars[$current];
			} else {
				throw new CarDoesntExistsException();
			}

			if (array_key_exists($current - 1, $this->arrayCars)) {
				$previous = $this->arrayCars[$current - 1];
			} else {
				throw new FirstCarException();
			}
			$return = $this->listOvertaking($previous, $atual);
			return $return;
		} else {
			throw new RaceNotStartedException();
		}
	}

	public function listOvertaking(object $previous, object $atual): array
	{
		$helper = [];

		for ($i = 0; $i < count($this->arrayCars); $i++) {
			if ($this->arrayCars[$i] === $previous) {
				array_push($helper, $this->arrayCars[$i + 1]);

			} else if ($this->arrayCars[$i] === $atual) {

				array_push($helper, $this->arrayCars[$i - 1]);

			} else {

				array_push($helper, $this->arrayCars[$i]);
			}
		}
		print 'Happened a overtaking!' . PHP_EOL;
		print 'The following car does a overtaking: ' . PHP_EOL;
		print '-------------------------------------------------------------------' . PHP_EOL;
		$this->listOneCar($atual);
		print '-------------------------------------------------------------------' . PHP_EOL;
		$this->arrayCars = $helper;
		print PHP_EOL;
		$this->listCar($helper);
		return $helper;
	}

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

	public function finishRace(): void
	{
		$podium = $this->arrayCars;
		print 'The winners are: ' . PHP_EOL;
		$helper = [];

		for ($i = 0; $i < 3; $i++) {
			array_push($helper, $podium[$i]);
		}
		$this->listCar($helper);
	}

	public function listOneCar(object $car): object
	{
		foreach ($car as $key => $value) {
			print_r($key . ": " . $value . ", ");
		}
		print PHP_EOL;
		return $car;
	}
}

