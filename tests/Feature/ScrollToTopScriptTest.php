<?php

declare(strict_types=1);

use Boquizo\FilamentScrollToTop\ScrollToTopPlugin;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;

it('renders the scroll-to-top script view', function (): void {
    $output = view('filament-scroll-to-top::script')->render();

    expect($output)->toContain('<script>')
        ->and($output)->toContain('scroll-to-top')
        ->and($output)->toContain('window.scrollTo')
        ->and($output)->toContain("behavior: 'smooth'");
});

it('registers the filament-scroll-to-top view namespace', function (): void {
    expect(view()->exists('filament-scroll-to-top::script'))->toBeTrue();
});

it('registers the scroll-to-top render hook on boot', function (): void {
    FilamentView::spy();

    ScrollToTopPlugin::make()->boot(Mockery::mock(Panel::class));

    FilamentView::shouldHaveReceived('registerRenderHook')
        ->once()
        ->with(PanelsRenderHook::SCRIPTS_AFTER, Mockery::type('callable'));
});
