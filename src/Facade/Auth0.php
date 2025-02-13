<?php

declare(strict_types=1);

namespace Auth0\Laravel\Facade;

use Illuminate\Support\Facades\Facade as FacadeContract;

/**
 * @codeCoverageIgnore
 */
final class Auth0 extends FacadeContract
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth0';
    }
}
