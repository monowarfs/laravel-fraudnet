<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models;

use Monowarfs\Fraudnet\Models\AccountLoginCheck\Input\Login;
use Monowarfs\Fraudnet\Models\AccountLoginCheck\Input\Device;
use Monowarfs\Fraudnet\Models\AccountLoginCheck\Input\Source;
use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class AccountLoginCheck
{
    use CommonModel;

    public ?Login $login = null;
    public ?Device $device = null;
    public ?Source $source = null;

    public function toArray()
    {
        return [
          'login' => $this->login->toArray(),
          'device' => $this->device->toArray(),
          'source' => $this->source->toArray()
        ];
    }
}
