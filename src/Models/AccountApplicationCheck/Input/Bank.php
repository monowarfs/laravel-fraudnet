<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Bank
{
    use CommonModel;

    /*
     * string
     * Example: applicants bank account identifier
     */
    public ?string $account_number = null;

    /*
     * string
     */
    public ?string $bank_name = null;

    /*
     * string
     */
    public ?string $branch_number = null;

    /*
     * string
     */
    public ?string $iban = null;

    /*
     * string
     * Used to verify account ownership
     */
    public ?string $swift_code = null;

    /*
     * string
     */
    public ?string $name_on_account = null;

    /*
     * string
     */
    public ?string $route_type = null;

    /*
     * string
     */
    public ?string $route_code = null;

    /*
     * string
     */
    public ?string $country = null;

    public function toArray()
    {
        return [
            "account_number" => $this->account_number,
            "bank_name" => $this->bank_name,
            "branch_number" => $this->branch_number,
            "iban" => $this->iban,
            "swift_code" => $this->swift_code,
            "name_on_account" => $this->name_on_account,
            "route_type" => $this->route_type,
            "route_code" => $this->route_code,
            "country" => $this->country
        ];
    }
}
