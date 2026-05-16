<?php

declare(strict_types=1);

namespace Boquizo\FilamentScrollToTop\Traits;

trait ScrollToTop
{
    public function setPage($page, $pageName = 'page'): void
    {
        parent::setPage($page, $pageName);

        $this->dispatch('scroll-to-top');
    }
}
