<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Library;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HttpCaller implements Caller
{
    private array $headers;
    private string $baseUrl;

    public function __construct($baseUrl = null)
    {
        $this->init();

        if ($baseUrl != null ) {
            $this->baseUrl = $baseUrl;
        }
    }

    public function setHeader($key, $value)
    {
        $this->headers[$key] = $value;
        return $this;
    }

    public function getHeader(): array
    {
        return $this->headers;
    }

    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function makePostRequest($url, $payload, $contentType = 'application/json')
    {
        $response = Http::withHeaders($this->getHeader())
            ->withHeaders([
                'Content-Type' => $contentType,
            ])
            ->post(
                $this->getBaseUrl() . $url,
                $payload
            );

        if (($errorResponse = $this->checkStatusCode($response->status())) !== false) {
            return $errorResponse;
        }

        if(($validationErrorResponse = $this->checkResponseValidation($response->object())) !== false ){
            return $validationErrorResponse;
        }

        return $response->body();
    }

    public function makePatchRequest($url, $payload, $contentType = 'application/json')
    {
        $response = Http::withHeaders($this->getHeader())
            ->withHeaders([
                'Content-Type' => $contentType,
            ])
            ->post(
                $this->getBaseUrl() . $url,
                $payload
            );

        if (($errorResponse = $this->checkStatusCode($response->status())) !== false) {
            return $errorResponse;
        }

        return $response->body();
    }

    public function makeGetRequest($url, $params = [], $passBody = false)
    {
        $response = Http::withHeaders($this->getHeader())
            ->get(
                $this->getBaseUrl() . $url,
                $params
            );

        if (($errorResponse = $this->checkStatusCode($response->status())) !== false) {
            return $errorResponse;
        }

        if ($passBody) {
            return $response;
        }

        return $response->body();
    }

    private function init(): void
    {
        $this->headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Content-Language' => 'en',
        ];
    }


    private function checkStatusCode($code)
    {
        $errorCodes = [401, 403, /*406,*/ 500, 503];

        if (in_array($code, $errorCodes, true)) {
            return new FraudnetResponseCodeException($code);
        }

        return false;
    }

    private function checkResponseValidation(Object $object)
    {
        if(!isset($object->success)){
            throw new \Exception('Response Validation Error!', 422);
        }

        if($object->success == false && $object->source === "Validation"){
            throw new \Exception(json_encode($object->message, JSON_THROW_ON_ERROR), 422);
        }

        if($object->success == false && $object->source === "Duplicate Order"){
            throw new \Exception(json_encode($object->message, JSON_THROW_ON_ERROR), 422);
        }

        return false ;
    }
}
