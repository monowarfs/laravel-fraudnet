<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Constant;

class APIEndpoint
{
    public const LIVE_API_BASE_URL = '';
    public const SANDBOX_API_BASE_URL = 'https://api-sandbox.c008-m008-us.fraud.net';
    public const MOCK_API_BASE_URL = 'https://stoplight.io/mocks/fraudnet/public-apis/28825911';

    public const API_ACCOUNT_LOGIN_CHECK = '/v2/account/login';
    public const API_ACCOUNT_APPLICATION_CHECK = '/v2/risk/transaction/account_application';
    public const API_ACCOUNT_APPLICATION_UPDATE = '/v2/risk/transaction/account_application';

    public const API_TRANSACTION_CHECK = '/v2/risk/transaction/bank';
    public const API_TRANSACTION_UPDATE = '/v2/risk/transaction/bank';

    public const API_LOAN_APPLICATION_CHECK = '/v2/risk/account/loan';
    public const API_LOAN_APPLICATION_UPDATE = '/v2/risk/account/loan';

    public const API_ECOMMERCE_ORDER_CHECK = '/v2/risk/order/ecommerce';
    public const API_ORDER_UPDATE = '/v2/risk/order';
    public const API_MARKETPLACE_ORDER_CHECK = '/v2/risk/order/marketplace';
    public const API_TRAVEL_ORDER_CHECK = '/v2/risk/order/check/travel';

    public static function getURL()
    {
        if(config('fruadnet.sandbox') === false)
        {
            return config('fraudnet.base_url');
        }
        return config('fraudnet.sandbox_base_url');
    }

}
