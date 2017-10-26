# predict-is

> Simple comparison prediction for scalar values

[![Build Status](https://travis-ci.org/try-php/predict-is.svg?branch=master)](https://travis-ci.org/try-php/predict-is)

## Install

```bash
$ composer require try/predict-is
```

## Usage

```php
<?php
require_once '/path/to/autoload.php';

use TryPhp\PredictIsTrait;

$assertions = new class() {
	use PredictIsTrait();
} 

$assertions->is(3, 3); // won't throw an exception

$assertions->predictException('something', 'something else'); // will throw an exception
```

## API

### Methods

#### `is($actual, $expected)`

Method to compare scalar values and throw an Exception if they do not equal.

##### Arguments

| Arguments | Type | Description |
|---|---|---|
| $actual | `mixed` | Actual value that shall be checked. |
| $expected | `mixed` | Expected value `$actual` is compared to. |

## Related packages

* [predict](https://github.com/try-php/predict)
* [predict-output](https://github.com/try-php/predict-output)
* [predict-exception](https://github.com/try-php/predict-exception)

## License

GPL-2.0 © Willi Eßer