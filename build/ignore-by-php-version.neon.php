<?php declare(strict_types = 1);

use Nette\Neon\Neon;

$config = [];
if (PHP_VERSION_ID >= 80000) {
	$config = array_merge($config, Neon::decode(file_get_contents(__DIR__ . '/baseline-8.0.neon')));
}

if (PHP_VERSION_ID >= 70400) {
	$config = array_merge($config, Neon::decode(file_get_contents(__DIR__ . '/ignore-gte-php7.4-errors.neon')));
}

return $config;
