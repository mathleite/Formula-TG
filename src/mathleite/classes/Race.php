<?php

namespace App\mathleite\classes;

class Race
{

	private $arrayCars;
	private $startRace = false;

	public function __construct(array $arrayCars)
	{
		$this->arrayCars = $arrayCars;

		if (count($arrayCars) < 2) {
			echo 'The race dont can start' . PHP_EOL;
			exit;
		}
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
				print 'This car doesnt exist' . PHP_EOL;
				return null;
			}

			if (array_key_exists($current - 1, $this->arrayCars)) {
				$previous = $this->arrayCars[$current - 1];
			} else {
				print 'This is already the first car on the race' . PHP_EOL;
				return null;
			}
			$return = $this->listOvertaking($previous, $atual);
			return $return;
		} else {
			print 'The race dont was started !' . PHP_EOL;
		}
	}

	public function listOvertaking(array $previous, array $atual): array
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
		print 'The following car  do a overtaking: ' . PHP_EOL;
		print '---------------------------------------------------------' . PHP_EOL;
		$this->listOneCar($atual);
		print '---------------------------------------------------------' . PHP_EOL;
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
			print_r("Color: " . $value['Color'] . ", ");
			print_r("Brand: " . $value['Brand'] . ", ");
			print_r("Model: " . $value['Model'] . ", ");
			print_r("Year: " . $value['Year'] . " " . PHP_EOL);
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

		foreach ($helper as $key => $value) {
			$position = $key + 1;
			echo "Position [{$position}] => ";
			print_r("Color: " . $value['Color'] . ", ");
			print_r("Brand: " . $value['Brand'] . ", ");
			print_r("Model: " . $value['Model'] . ", ");
			print_r("Year: " . $value['Year'] . " " . PHP_EOL);
			echo PHP_EOL;
		}
	}

	public function listOneCar($car): array
	{
		foreach ($car as $key => $value) {
			print_r($key . ": " . $value . ", ");
		}
		print PHP_EOL;
		return $car;
	}
}

