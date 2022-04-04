<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class FraudType
{
    public const PAYMENT_RISK = "payment risk";
    public const POLICY_ABUSE = "policy abuse";
    public const FRIENDLY_FRAUD = "friendly fraud";
    public const IDENTITY_THEFT = "identity theft";
    public const SYNTHETIC_IDENTITY = "synthetic identity";
    public const ACCOUNT_TAKEOVER = "account takeover";
    public const RETURN = "return";
    public const REFUND = "refund";
    public const MARKETPLACE = "marketplace";
    public const NON_PAYMENT = "non-payment";
    public const PACKAGE_THEFT = "package theft";
    public const OTHER = "other";
}
