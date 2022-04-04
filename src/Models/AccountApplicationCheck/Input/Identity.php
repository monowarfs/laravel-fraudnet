<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Identity
{
    use CommonModel;

    /*
     * string
     */
    public ?string $country = null;

    /*
     * string
     * National ID of the applicant, such as social security number
     * Example: 63431483
     */
    public ?string $id = null;

    /*
     * string
     */
    public ?string $region = null;

    /*
     * string
     * The type of national ID of the applicant
     * Allowed values: social_security, national_id, itin, drivers_license, tax_id, regional_id, passport
     */
    public ?string $type = null;

    public function toArray()
    {
        return [
            "country" => $this->country,
            "id" => $this->id,
            "region" => $this->region,
            "type" => $this->type
        ];
    }
}
