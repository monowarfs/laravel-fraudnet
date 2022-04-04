<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class TransactionUpdateStatus
{
    public const NEW = 'new'; //default
    public const HOLD = 'hold';
    public const QUEUED = 'queued';
    public const APPROVED = 'approved';
    public const CANCELLED = 'cancelled';
    public const FULFILLED = 'fulfilled';
    public const RETURNED = 'returned';
    public const CHARGEBACK = 'chargeback';
}
