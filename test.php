<?php
require_once __DIR__ . '/vendor/autoload.php';

use TryPhp\PredictIsTrait;

$executionClass = new class() {
	use PredictIsTrait;
};

try {
	$executionClass->is(4, 4);
} catch (\Exception $ex) {
	trigger_error('test failed.', E_USER_ERROR);
}

try {
	$executionClass->is(4, 5);
	trigger_error('test failed.', E_USER_ERROR);
} catch (\Exception $ex) {
	
}

try {
	$executionClass->is('some string', 'some string');
} catch (\Exception $ex) {
	trigger_error('test failed.', E_USER_ERROR);
}

try {
	$executionClass->is('some string', 'some other string');
	trigger_error('test failed.', E_USER_ERROR);
} catch (\Exception $ex) {
	
}

try {
	$executionClass->is(true, true);
} catch (\Exception $ex) {
	trigger_error('test failed.', E_USER_ERROR);
}

try {
	$executionClass->is(true, false);
	trigger_error('test failed.', E_USER_ERROR);
} catch (\Exception $ex) {
	
}

try {
	$executionClass->is(new \stdClass(), [1,2]);
	trigger_error('test failed.', E_USER_ERROR);
} catch (\Exception $ex) {
	if ($ex->getMessage() !== "'try/predict-is' can only compare scalar values. 'try/predict' for complex predictions.") {
		trigger_error('test failed.', E_USER_ERROR);
	}
}

try {
	$executionClass->is([1,2], new \stdClass());
	trigger_error('test failed.', E_USER_ERROR);
} catch (\Exception $ex) {
	if ($ex->getMessage() !== "'try/predict-is' can only compare scalar values. 'try/predict' for complex predictions.") {
		trigger_error('test failed.', E_USER_ERROR);
	}
}