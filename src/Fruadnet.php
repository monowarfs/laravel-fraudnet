<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet;

use Monowarfs\Fraudnet\Models\AccountApplicationCheck;
use Monowarfs\Fraudnet\Models\AccountApplicationUpdate;
use Monowarfs\Fraudnet\Models\AccountLoginCheck;
use Monowarfs\Fraudnet\Models\Configuration;
use Monowarfs\Fraudnet\Models\TransactionCheck;
use Monowarfs\Fraudnet\Models\TransactionUpdate;
use Monowarfs\Fraudnet\Services\BankingFintech\TransactionCheckService;
use Monowarfs\Fraudnet\Services\Identity\AccountApplicationCheckService;
use Monowarfs\Fraudnet\Services\Identity\AccountApplicationUpdateService;
use Monowarfs\Fraudnet\Services\Identity\AccountLoginCheckService;

class Fruadnet
{
    public function transactionCheck(TransactionCheck $transactionCheck, ?Configuration $configuration)
    {
        return (new TransactionCheckService($transactionCheck, $configuration))->call();
    }

    public function transactionUpdate(TransactionUpdate $transactionUpdate, ?Configuration $configuration)
    {
        return (new TransactionUpdate($transactionUpdate, $configuration))->call();
    }

    public function accountApplicationCheck(
        AccountApplicationCheck $accountApplicationCheck,
        ?Configuration $configuration
    )
    {
        return (new AccountApplicationCheckService($accountApplicationCheck, $configuration))->call();
    }

    public function accountApplicationUpdate(
        AccountApplicationUpdate $accountApplicationUpdate,
        ?Configuration $configuration
    )
    {
        return (new AccountApplicationUpdateService($accountApplicationUpdate, $configuration))->call();
    }

    public function accountLoginCheck(
        AccountLoginCheck $accountLoginCheck,
        ?Configuration $configuration = null
    )
    {
        return (new AccountLoginCheckService($accountLoginCheck, $configuration))->call();
    }
}
