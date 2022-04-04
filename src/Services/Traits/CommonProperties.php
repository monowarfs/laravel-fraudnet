<?php

namespace Monowarfs\Fraudnet\Services\Traits;

use Monowarfs\Fraudnet\Constant\APIEndpoint;
use Monowarfs\Fraudnet\Library\HttpCaller;
use Monowarfs\Fraudnet\Models\Configuration;

trait CommonProperties
{
    public APIEndpoint $api;
    private HttpCaller $httpCaller;
    private string $authCode;

    private function callCommon(?Configuration $configuration): void
    {
        $this->api = new APIEndpoint();
        $baseUrl = $configuration === null ?  APIEndpoint::getURL() : $configuration->url;
        $this->httpCaller = new HttpCaller($baseUrl);

        $this->authCode = config('fraudnet.auth_username').":".config('fraudnet.auth_password');

        if($configuration !== null) {
            $this->authCode = $configuration->auth_username.':'.$configuration->auth_password;
        }
    }
}
