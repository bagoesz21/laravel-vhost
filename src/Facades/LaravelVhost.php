<?php

namespace Bagoesz21\LaravelVhost\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelVhost extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-vhost';
    }
}
