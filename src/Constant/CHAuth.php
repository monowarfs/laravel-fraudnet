<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class CHAuth
{
    public const SIGNATURE = 'signature';
    public const ONLINE_PIN = 'online_pin';
    public const OFFLINE_ENCIPHERED_PIN = 'offline_enciphered_pin';
    public const OFFLINE_PLAIN_TEXT_PIN = 'offline_plain_text_pin';

    public const MANUAL = 'manual';
    public const MAG_STRIPE = 'mag_stripe';
    public const CHIP_AND_PIN = 'chip_and_pin';
    public const CONTACTLESS = 'contactless';

    public const CARD_NOT_PRESENT = 'card_not_present';
    public const ON_FILE = 'on_file';
    public const E_WALLET = 'e_wallet';
    public const NONE = 'none';
}
