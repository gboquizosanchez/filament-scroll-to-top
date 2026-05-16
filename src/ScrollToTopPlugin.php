<?php

declare(strict_types=1);

namespace Boquizo\FilamentScrollToTop;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;

final class ScrollToTopPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'scroll-to-top';
    }

    public function register(Panel $panel): void {}

    public function boot(Panel $panel): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::SCRIPTS_AFTER,
            static fn() => view('filament-scroll-to-top::script'),
        );
    }
}
