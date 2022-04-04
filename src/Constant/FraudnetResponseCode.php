<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class FraudnetResponseCode
{
    public const RSC200 = 'Whether the Request was successful.';
    public const RSC401 = 'Unauthorized. Invalid credentials or authorization header.';
    public const RSC403 = 'Forbidden. You do not have authorization to make this request.';
    public const RSC406 = 'Not Acceptable. Invalid data being passed by the request.';
    public const RSC500 = 'Internal Server Error. Something went wrong on the server';
    public const RSC503 = 'Service Unavailable';

    public function getText($sl_no)
    {
        switch ($sl_no) {
            case 200:
                return self::RSC200;
            case 401:
                return self::RSC401;
            case 403:
                return self::RSC403;
            case 406:
                return self::RSC406;
            case 500:
                return self::RSC500;
            case 503:
                return self::RSC503;
        }
    }
}
