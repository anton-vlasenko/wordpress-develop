<?php

/**
 * Tests the esc_url function.
 *
 * @since 6.1.0
 *
 * @group functions.php
 * @covers ::esc_url
 */
class Tests_Functions_escUrl extends WP_UnitTestCase {
	public function test_should_return_empty_string_if_the_url_is_null() {
		$result = esc_url( null );
		$this->assertSame( '', $result );
	}
}
