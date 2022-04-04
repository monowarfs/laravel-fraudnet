<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class PaymentStatus
{
    public const AUTH = 'auth';
    public const PAID = 'paid';
    public const PARTIALLY_PAID = 'partially paid';
    public const INVOICED = 'invoiced';

    public const REFUNDED = 'refunded';
    public const PARTIALLY_REFUNDED = 'partially refunded';
    public const DEFAULT = 'default';
    public const PARTIALLY_DEFAULT = 'partially default';

    public const DECLINED = 'declined';
    public const CHARGEBACK = 'chargeback';
    public const VOID = 'void';
}
