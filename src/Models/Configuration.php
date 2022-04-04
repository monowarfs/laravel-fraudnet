<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models;

use Monowarfs\Fraudnet\Constant\APIEndpoint;

class Configuration
{
    public ?string $url = null;
    public ?string $auth_username = null;
    public ?string $auth_password = null;

    public function __construct(?string $url, ?string $auth_username, ?string $auth_password)
    {
        $this->url = $url ?? APIEndpoint::getUrl();
        $this->auth_username = $auth_username ?? config('fraudnet.auth_username');
        $this->auth_password = $auth_password ?? config('fraudnet.auth_password');
    }
}
