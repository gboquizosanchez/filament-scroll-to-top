<?php

declare(strict_types=1);

namespace Boquizo\FilamentScrollToTop;

use Illuminate\Support\ServiceProvider;

final class ScrollToTopServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-scroll-to-top');
    }
}
