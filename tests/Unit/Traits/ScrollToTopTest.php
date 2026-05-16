<?php

declare(strict_types=1);

use Boquizo\FilamentScrollToTop\Traits\ScrollToTop;

// Test double that simulates a Livewire component base with the trait applied.
class BaseComponent
{
    public array $pageHistory = [];

    public function setPage($page, $pageName = 'page'): void
    {
        $this->pageHistory[] = [$page, $pageName];
    }
}

class TestComponent extends BaseComponent
{
    use ScrollToTop;

    public array $dispatched = [];

    public function dispatch(string $event): void
    {
        $this->dispatched[] = $event;
    }
}

it('dispatches the scroll-to-top event when the page changes', function (): void {
    $component = new TestComponent();

    $component->setPage(2);

    expect($component->dispatched)->toContain('scroll-to-top');
});

it('still calls parent::setPage() when the page changes', function (): void {
    $component = new TestComponent();

    $component->setPage(3, 'page');

    expect($component->pageHistory)->toBe([[3, 'page']]);
});

it('dispatches exactly one event per page change', function (): void {
    $component = new TestComponent();

    $component->setPage(2);
    $component->setPage(3);

    expect($component->dispatched)->toHaveCount(2)
        ->each->toBe('scroll-to-top');
});

it('respects a custom page name', function (): void {
    $component = new TestComponent();

    $component->setPage(1, 'customPage');

    expect($component->pageHistory)->toBe([[1, 'customPage']])
        ->and($component->dispatched)->toContain('scroll-to-top');
});
