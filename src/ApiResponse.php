<?php

namespace Asifcode\ApiResponse;

use Asifcode\ApiResponse\Services\ApiResponseService;


class ApiResponse
{
    public static function response(int $status)
    {
        return new ApiResponseService($status);
    }
}
