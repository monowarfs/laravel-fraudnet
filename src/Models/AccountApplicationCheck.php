<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models;

use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Account;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Address;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Application;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Bank;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Device;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Employer;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Identity;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input\Source;
use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class AccountApplicationCheck
{
    use CommonModel;

    public ?Account $account = null;
    public ?Address $address = null;
    public ?Bank $bank = null;
    public ?Identity $identity = null;
    public ?Employer $employer = null;
    public ?Application $application = null;
    public ?Device $device = null;
    public ?Source $source = null;

    public function toArray()
    {
        return [
            "account" => $this->account->toArray(),
            "address" => $this->address->toArray(),
            "bank" => $this->bank->toArray(),
            "identity" => $this->identity->toArray(),
            "employer" => $this->employer->toArray(),
            "application" => $this->application->toArray(),
            "device" => $this->device->toArray(),
            "source" => $this->source->toArray(),
        ];
    }
}
