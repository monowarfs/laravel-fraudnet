<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\TransactionCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Seller
{
    use CommonModel;

    public ?string $address1 = null;
    public ?string $address2 = null;
    public ?string $city = null;
    public ?string $company = null;
    public ?string $country = null;
    public ?string $email = null;
    public ?string $industry = null;
    public ?string $mcc_id = null;
    public ?string $name = null;
    public ?string $phone = null;
    public ?string $postal_code = null;
    public ?string $region = null;
    public ?string $sector = null;
    public ?string $seller_id = null;
    public ?string $tax_id = null;
    public ?string $account_id = null;
    public ?string $account_type = null;

    public function toArray()
    {
        return [
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'company' => $this->company,
            'country' => $this->country,

            'email' => $this->email,
            'industry' => $this->industry,
            'mcc_id' => $this->mcc_id,
            'name' => $this->name,
            'phone' => $this->phone,

            'postal_code' => $this->postal_code,
            'region' => $this->region,
            'sector' => $this->sector,
            'seller_id' => $this->seller_id,
            'tax_id' => $this->tax_id,

            'account_id' => $this->account_id,
            'account_type' => $this->account_type,

        ];
    }
}
