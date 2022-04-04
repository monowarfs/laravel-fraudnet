<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class Method
{
    public const ACH = 'ach';
    public const APPLE_PAY = 'apple_pay';
    public const ANDROID_PAY = 'android_pay';
    public const BILL_ME_LATER = 'bill_me_later';
    public const BITCOIN = 'bitcoin';

    public const CASH = 'cash';
    public const CHECK = 'check';
    public const CREDIT_CARD = 'credit_card';
    public const CREDIT = 'credit';
    public const DIRECT_DEBIT = 'direct_debit';

    public const ECHECK = 'eCheck';
    public const EFT = 'eft';
    public const EPAYMENT = 'epayment';
    public const GIFT_CARD = 'gift_card';
    public const GOOGLE_WALLET = 'google_wallet';

    public const INVOICE = 'invoice';
    public const MASTERPASS = 'masterpass';
    public const MONEY_ORDER = 'money_order';
    public const PAYPAL = 'paypal';
    public const REWARDS_POINTS = 'rewards_points';

    public const VOUCHER = 'voucher';
    public const THIRD_PARTY_PROCESSOR = 'third_party_processor';
    public const OTHER = 'other';
    public const ATM = 'atm';
    public const DIRECT_DEPOSIT = 'direct_deposit';

    public const EWALLETS = 'ewallets';
    public const GOODS_SERVICE = 'goods_service';
    public const LOCAL_BANK_TRANSFERS = 'local_bank_transfers';
    public const PBAY = 'pbay';
    public const SEPA = 'sepa';

    public const WIRE_TRANSFER = 'wire_transfer';
    public const NPP = 'npp';
    public const FASTER_PAYMENT = 'faster_payment';
    public const BACS = 'bacs';
    public const CHAPS = 'chaps';

    public const INTERNAL_TRANSFER = 'internal_transfer';
    public const FEE = 'fee';
    public const SWIFT = 'swift';
    public const DEBIT_CARD = 'debit_card';
    public const CARRIER_BILLING = 'carrier_billing';
}
