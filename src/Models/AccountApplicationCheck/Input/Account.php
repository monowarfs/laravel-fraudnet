<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Account
{
    use CommonModel;

    /*
     * Required
     * Id of your customer
     */
    public ?string $customer_id = null;

    /*
     * string <date>
     * User's date of birth, in ISO 8601 YYYY-MM-DD format
     */
    public ?string $dob = null;

    /*
     * string
     * First name of the applicant
     */
    public ?string $first_name = null;

    /*
     * string
     * last name of the applicant
     */
    public ?string $last_name = null;

    /*
     * string
     * Email of the applicant
     */
    public ?string $email = null;

    /*
     * string
     * Phone number of the applicant
     */
    public ?string $phone_number = null;

    /*
     * string
     * Type of phone (mobile, home)
     * Allowed values: home, work
     */
    public ?string $phone_type = null;

    /*
     * string
     * Company name associated with the transaction, if applying for a company
     */
    public ?string $company_name = null;


    public function toArray()
    {
        return [
            "customer_id" => $this->customer_id,
            "dob" => $this->dob,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "email" => $this->email,
            "phone_number" => $this->phone_number,
            "phone_type" => $this->phone_type,
            "company_name" => $this->company_name
        ];
    }
}
