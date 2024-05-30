<?php

namespace Asifcode\ApiResponse\Services;

use Illuminate\Http\JsonResponse;

class ApiResponseService
{
    private int $status;

    private bool $success = false;

    private mixed $errors = null;

    private mixed $data = null;

    private string $message = '';

    private array $codes;

    private array $succesCodes = [200, 201, 202, 203, 204];

    private mixed $headers = null;

    public function __construct(int $status)
    {
        $this->codes = config('api-response.status_codes') ?? [];
        $this->succesCodes = config('api-response.success_codes') ?? $this->succesCodes;
        $http = $this->codes[$status];
        $this->status = $http['code'];
        $this->message = $http['message'];
        $this->checkStatusByCode($status);
    }

    /**
     * @return $this
     */

    public function status(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function checkStatusByCode(int $status): self
    {
        if(in_array($status, $this->succesCodes)){
            $this->success();
        } else {
            $this->error();
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function success(): self
    {
        $this->success = true;

        return $this;
    }

    /**
     * @return $this
     */

     public function error(): self
    {
        $this->success = false;

        return $this;
    }

    /**
     * @return $this
     */
    public function message(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function errors(mixed $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @return $this
     */
    public function data(mixed $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return $this
     */

    public function headers(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function send(): JsonResponse
    {
        $response = [
            'success' => $this->success,
            'message' => $this->message,
            'data' => $this->data,
            'errors' => $this->errors,
            'headers' => $this->headers
        ];

        return response()->json($response, $this->status);
    }

    public function pagination()
    {
        $response = [
            'success' => $this->success,
            'message' => $this->message,
            'data' => $this->data,
            'errors' => $this->errors,
            'headers' => $this->headers
        ];

        return $response;

    }

}
