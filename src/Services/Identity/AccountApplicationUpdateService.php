<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Services\Identity;

use Illuminate\Support\Facades\Log;
use Monowarfs\Fraudnet\Exceptions\FraudnetException;
use Monowarfs\Fraudnet\Models\AccountApplicationUpdate;
use Monowarfs\Fraudnet\Models\Configuration;
use Monowarfs\Fraudnet\Services\Traits\CommonProperties;

class AccountApplicationUpdateService
{
    use CommonProperties;

    private AccountApplicationUpdate $accountApplicationUpdate;

    public function __construct(AccountApplicationUpdate $accountApplicationUpdate, ?Configuration $configuration)
    {
        $this->callCommon($configuration);
        $this->accountApplicationUpdate = $accountApplicationUpdate;
    }

    public function call()
    {
        try{
            return $this->httpCaller
                ->setHeader('Authorization', 'Basic '.base64_encode($this->authCode))
                ->makePatchRequest(
                    $this->api::API_ACCOUNT_APPLICATION_UPDATE,
                    $this->accountApplicationUpdate->assignedToArray()
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
