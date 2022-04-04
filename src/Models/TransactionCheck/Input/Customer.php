<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\TransactionCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Customer
{
    use CommonModel;

    /*
     * Required
     * string
     * Customer Id
     */
    public ?string $id = null;
    public ?string $address1 = null;
    public ?string $address2 = null;
    public ?string $city = null;
    public ?string $company = null;
    public ?string $country = null;
    public ?string $email = null;
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?string $phone = null;
    public ?string $postal_code = null;
    public ?string $region = null;
    public ?string $phone_2 = null;
    public ?string $phone_3 = null;
    public ?string $started_on = null;
    public ?string $type = null;
    public ?string $dob = null;
    public ?int $annual_income = null;

    public function toArray()
    {
        return [
            'id' => $this->id,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'company' => $this->company,
            'country' => $this->country,
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'postal_code' => $this->postal_code,
            'region' => $this->region,
            'phone_2' => $this->phone_2,
            'phone_3' => $this->phone_3,
            'started_on' => $this->started_on,
            'type' => $this->type,
            'dob' => $this->dob,
            'annual_income' => $this->annual_income
        ];
    }
}
