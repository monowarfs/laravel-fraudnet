<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Services\Identity;

use Illuminate\Support\Facades\Log;
use Monowarfs\Fraudnet\Exceptions\FraudnetException;
use Monowarfs\Fraudnet\Models\AccountLoginCheck;
use Monowarfs\Fraudnet\Models\Configuration;
use Monowarfs\Fraudnet\Services\Traits\CommonProperties;

class AccountLoginCheckService
{
    use CommonProperties;

    private AccountLoginCheck $accountLoginCheck;

    public function __construct(AccountLoginCheck $accountLoginCheck, ?Configuration $configuration)
    {
        $this->callCommon($configuration);
        $this->accountLoginCheck = $accountLoginCheck;
    }

    public function call()
    {
        try{

            return $this->httpCaller
                ->setHeader('Authorization', 'Basic '.base64_encode($this->authCode))
                ->makePostRequest(
                    $this->api::API_ACCOUNT_LOGIN_CHECK,
                    $this->accountLoginCheck->toArray()
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
