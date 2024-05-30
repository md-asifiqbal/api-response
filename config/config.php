<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'success_codes' => [200, 201, 202, 203, 204],
    'status_codes' => [
        '200' => [
            'code' => 200,
            'message' => 'OK',
        ],
        '201' => [
            'code' => 201,
            'message' => 'Created',
        ],
        '202' => [
            'code' => 202,
            'message' => 'Accepted',
        ],
        '203' => [
            'code' => 203,
            'message' => 'Non-Authoritative Information',
        ],
        '204' => [
            'code' => 204,
            'message' => 'No Content',
        ],
        '400' => [
            'code' => 400,
            'message' => 'Bad Request',
        ],
        '401' => [
            'code' => 401,
            'message' => 'Unauthorized',
        ],
        '403' => [
            'code' => 403,
            'message' => 'Forbidden',
        ],
        '404' => [
            'code' => 404,
            'message' => 'Not Found',
        ],
        '409' => [
            'code' => 409,
            'message' => 'Conflict',
        ],
        '422' => [
            'code' => 422,
            'message' => 'Unprocessable Entity',
        ],
        '423' => [
            'code' => 423,
            'message' => 'Locked',
        ],
        '424' => [
            'code' => 424,
            'message' => 'Failed Dependency',
        ],
        '426' => [
            'code' => 426,
            'message' => 'Upgrade Required',
        ],
        '429' => [
            'code' => 429,
            'message' => 'Too Many Requests',
        ],
        '500' => [
            'code' => 500,
            'message' => 'Internal Server Error',
        ],
        '501' => [
            'code' => 501,
            'message' => 'Not Implemented',
        ],
        '502' => [
            'code' => 502,
            'message' => 'Bad Gateway',
        ],
        '503' => [
            'code' => 503,
            'message' => 'Service Unavailable',
        ],
        '504' => [
            'code' => 504,
            'message' => 'Gateway Timeout',
        ],
        '505' => [
            'code' => 505,
            'message' => 'HTTP Version Not Supported',
        ],

    ],
];
