<?php

namespace App\Traits;

trait RedirectIndex
{
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
