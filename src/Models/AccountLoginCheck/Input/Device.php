<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountLoginCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Device
{
    use CommonModel;

    public ?string $fingerprint_id = null;
    /*
     * Required
     */
    public ?string $data = null;
    public ?string $ip_address = null;
    public ?string $user_agent = null;

    public function toArray()
    {
        return [
            "fingerprint_id" => $this->fingerprint_id,
            "data" => $this->data,
            "ip_address" => $this->ip_address,
            "user_agent" => $this->user_agent
        ];
    }
}
