<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Employer
{
    use CommonModel;

    /*
     * number
     * Applicant's annual income
     */
    public ?int $income = null;

    /*
     * string
     * Primary source of income
     */
    public ?string $income_source = null;

    /*
     * string
     * Name of the applicant's employer
     */
    public ?string $employment_type = null;

    /*
     * string
     * Name of the applicant's employer
     */
    public ?string $employer = null;

    public function toArray()
    {
        return [
            "income" =>$this->income,
            "income_source" => $this->income_source,
            "employment_type" => $this->employment_type,
            "employer" => $this->employer
        ];
    }
}
