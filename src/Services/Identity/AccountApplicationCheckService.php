<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Services\Identity;

use Illuminate\Support\Facades\Log;
use Monowarfs\Fraudnet\Exceptions\FraudnetException;
use Monowarfs\Fraudnet\Models\AccountApplicationCheck;
use Monowarfs\Fraudnet\Models\Configuration;
use Monowarfs\Fraudnet\Services\Traits\CommonProperties;

class AccountApplicationCheckService
{
    use CommonProperties;

    private AccountApplicationCheck $accountApplicationCheck;

    public function __construct(AccountApplicationCheck $accountApplicationCheck, ?Configuration $configuration)
    {
        $this->callCommon($configuration);
        $this->accountApplicationCheck = $accountApplicationCheck;
    }

    public function call()
    {
        try{
            return $this->httpCaller
                ->setHeader('Authorization', 'Basic '.base64_encode($this->authCode))
                ->makePostRequest(
                    $this->api::API_ACCOUNT_APPLICATION_CHECK,
                    $this->accountApplicationCheck->assignedToArray()
                );
        }catch (FraudnetException $e){
            // do anything with the exception
            Log::error(
                $e->getFile() . ' ' .
                $e->getLine() . ' ' .
                $e->getMessage()
            );
            Log::error($e);
            return $e;
        }catch (\Exception|\Throwable $e){

            Log::error(
                $e->getFile() . ' ' .
                $e->getLine() . ' ' .
                $e->getMessage()
            );
            Log::error($e);
            return $e;
        }
    }
}
