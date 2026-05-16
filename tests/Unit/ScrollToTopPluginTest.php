<?php

declare(strict_types=1);

use Boquizo\FilamentScrollToTop\ScrollToTopPlugin;
use Filament\Contracts\Plugin;

it('implements the Filament Plugin contract', function (): void {
    expect(ScrollToTopPlugin::make())->toBeInstanceOf(Plugin::class);
});

it('make() returns a ScrollToTopPlugin instance', function (): void {
    expect(ScrollToTopPlugin::make())->toBeInstanceOf(ScrollToTopPlugin::class);
});

it('has the correct plugin id', function (): void {
    expect(ScrollToTopPlugin::make()->getId())->toBe('scroll-to-top');
});

it('make() always returns a fresh instance', function (): void {
    expect(ScrollToTopPlugin::make())->not->toBe(ScrollToTopPlugin::make());
});
