<?php

declare(strict_types=1);

namespace Tests;

use Boquizo\FilamentScrollToTop\ScrollToTopServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ScrollToTopServiceProvider::class,
        ];
    }
}
