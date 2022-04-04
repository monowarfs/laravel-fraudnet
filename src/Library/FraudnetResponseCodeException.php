<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Library;

use Monowarfs\Fraudnet\Constant\FraudnetResponseCode;
use Monowarfs\Fraudnet\Exceptions\FraudnetException;

class FraudnetResponseCodeException
{
    public const THROW_NONE = 200;
    public const THROW_401  = 401;
    public const THROW_403 = 403;
    public const THROW_405 = 405;
    public const THROW_500 = 500;
    public const THROW_503 = 503;


    function __construct($avalue = self::THROW_NONE) {

        switch ($avalue) {
            case self::THROW_401:
                throw new FraudnetException(FraudnetResponseCode::RSC401, 401);
                break;

            case self::THROW_403:
                throw new FraudnetException(FraudnetResponseCode::RSC403, 403);
                break;

            case self::THROW_405:
                throw new FraudnetException(FraudnetResponseCode::RSC401, 405);
                break;

            case self::THROW_500:
                throw new FraudnetException(FraudnetResponseCode::RSC500, 500);
                break;

            case self::THROW_503:
                throw new FraudnetException(FraudnetResponseCode::RSC503, 503);
                break;

            default:
                // No exception
                break;
        }
    }
}
