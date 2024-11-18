<?php

namespace UppercaseStringTrim;

use function PHPStan\Testing\assertType;

class Foo
{

	/**
	 * @param uppercase-string $uppercase
	 */
	public function doTrim(string $uppercase, string $string): void
	{
		assertType('lowercase-string|uppercase-string', trim($uppercase));
		assertType('lowercase-string|uppercase-string', ltrim($uppercase));
		assertType('lowercase-string|uppercase-string', rtrim($uppercase));
		assertType('lowercase-string|uppercase-string', trim($uppercase, $string));
		assertType('lowercase-string|uppercase-string', ltrim($uppercase, $string));
		assertType('lowercase-string|uppercase-string', rtrim($uppercase, $string));
		assertType('string', trim($string));
		assertType('string', ltrim($string));
		assertType('string', rtrim($string));
		assertType('string', trim($string, $uppercase));
		assertType('string', ltrim($string, $uppercase));
		assertType('string', rtrim($string, $uppercase));
	}

}
