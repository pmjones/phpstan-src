<?php

namespace UppercaseStringParseUrl;

use function PHPStan\Testing\assertType;

class Foo
{

	/**
	 * @param uppercase-string $uppercase
	 */
	public function doParseUrl(string $uppercase): void
	{
		assertType('array{scheme?: uppercase-string, host?: uppercase-string, port?: int<0, 65535>, user?: uppercase-string, pass?: uppercase-string, path?: uppercase-string, query?: uppercase-string, fragment?: uppercase-string}|false', parse_url($uppercase));
		assertType('uppercase-string|false|null', parse_url($uppercase, PHP_URL_SCHEME));
		assertType('uppercase-string|false|null', parse_url($uppercase, PHP_URL_HOST));
		assertType('int<0, 65535>|false|null', parse_url($uppercase, PHP_URL_PORT));
		assertType('uppercase-string|false|null', parse_url($uppercase, PHP_URL_USER));
		assertType('uppercase-string|false|null', parse_url($uppercase, PHP_URL_PASS));
		assertType('uppercase-string|false|null', parse_url($uppercase, PHP_URL_PATH));
		assertType('uppercase-string|false|null', parse_url($uppercase, PHP_URL_QUERY));
		assertType('uppercase-string|false|null', parse_url($uppercase, PHP_URL_FRAGMENT));
	}

}
