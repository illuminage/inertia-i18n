<?php

namespace Svidware\InertiaI18n\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Svidware\InertiaI18n\InertiaI18n
 */
class InertiaI18n extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return \Svidware\InertiaI18n\InertiaI18n::class;
    }
}
