<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Exceptions;

use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class FraudnetException extends \Exception
{
    public function __construct($message, $code = 0, \Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function reportToExternalWorld(Mailable $mail) {
        Mail::to(config('fraudnet.api_error_report_email'))->send($mail);
    }
}
