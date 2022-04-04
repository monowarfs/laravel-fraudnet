<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountLoginCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Login
{
    use CommonModel;
    /*
     * required
     */
    public ?string $user_name = null;
    public ?string $customer_id = null;
    public ?string $is_valid = null;
    /*
     * "2019-08-24T14:15:22Z"
     */
    public ?string $created_on = null;
    public ?string $session_id = null;


    public function toArray()
    {
        return [
            "user_name" => $this->user_name,
            "customer_id" => $this->customer_id,
            "is_valid" => $this->is_valid,
            "created_on" => $this->created_on,//"2019-08-24T14:15:22Z",
            "session_id" => $this->session_id
        ];
    }
}

