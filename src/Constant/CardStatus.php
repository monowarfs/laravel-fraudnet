<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class CardStatus
{
    public const ACTIVE = 'active';
    public const CANCELLED = 'cancelled';
    public const DECLINE = 'decline';
    public const DELETED = 'deleted';
    public const INACTIVE = 'inactive';
    public const LOST = 'lost';
    public const NEW = 'new';
    public const PICK_UP = 'pick-up';
    public const REQUEST = 'request';
    public const RESTRICTED = 'restricted';
    public const STOLEN = 'stolen';
    public const SUSPENDED = 'suspended';
    public const DELINQUENCY = 'delinquency';
    public const DAMAGED = 'damaged';
    public const EXPIRED = 'expired';
}
