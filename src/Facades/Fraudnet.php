<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Facades;

use Illuminate\Support\Facades\Facade;

class Fraudnet extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Fraudnet';
    }
}
