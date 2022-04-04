<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Address
{
    use CommonModel;

    /*
     * string
     * Applicant's street associated with the application
     */
    public ?string $address1 = null;

    /*
     * string
     * Applicant's address line 2 associated with the application
     */
    public ?string $address2 = null;

    /*
     * string
     * Address city associated with the transaction
     */
    public ?string $city = null;

    /*
     * string
     * Postal code of the applicant
     */
    public ?string $postal_code = null;

    /*
     * string
     * 2 digit state, province or region of the applicant code
     */
    public ?string $region = null;

    /*
     * string
     * Country associated with the applicant's address, in ISO 3166-1 alpha format
     */
    public ?string $country = null;

    public function toArray()
    {
        return [
            "address1" => $this->address1,
            "address2" => $this->address2,
            "city" => $this->city,
            "postal_code" => $this->postal_code,
            "region" => $this->region,
            "country" => $this->country
        ];
    }
}
