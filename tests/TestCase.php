<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        set_error_handler(function ($errno, $errstr) {
            if (str_contains($errstr, 'SessionHandlerInterface is missing the create_sid() method')) {
                return true;
            }
            return false;
        }, E_WARNING | E_DEPRECATED);
    }
}
