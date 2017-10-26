<?php
namespace TryPhp;

trait PredictIsTrait
{
	/**
	 * Method to test scalar values if they equal one another
	 * @param mixed $actual
	 * @param mixed $expected
	 * @throws \Exception
	 */
	public function is($actual, $expected)
	{
		if (!is_scalar($actual) || !is_scalar($expected)) {
			throw new \Exception("'try/predict-is' can only compare scalar values. 'try/predict' for complex predictions.");
		}

		if ($actual !== $expected) {
			throw new \Exception("Expected '$expected', but got '$actual'.");
		}
	}
}