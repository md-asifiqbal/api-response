<?php

namespace Asifcode\ApiResponse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Asifcode\ApiResponse\Skeleton\SkeletonClass
 */
class ApiResponseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'api-response';
    }
}
