<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Application
{
    use CommonModel;

    /*
     * string
     * The unique identifier of the application
     * Required
     */
    public ?string $application_id = null;

    /*
     * string <date-time>
     * Required
     */
    public ?string $created_on = null;

    /*
     * string
     * Fraud.net´s application status
     * Allowed values:new,queued,approved,cancelled,fulfilled
     * Default: new
     */
    public ?string $status = null;

    /*
     * string
     * Merchants application custom status
     */
    public ?string $event = null;

    /*
     * string
     * Source of the application
     */
    public ?string $source = null;


    public function toArray()
    {
        return [
            "application_id" => $this->application_id,
            "created_on" => $this->created_on,
            "status" => $this->status,
            "event" => $this->event,
            "source" => $this->source
        ];
    }
}
