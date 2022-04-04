<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Services\BankingFintech;

use Illuminate\Support\Facades\Log;
use Monowarfs\Fraudnet\Exceptions\FraudnetException;
use Monowarfs\Fraudnet\Models\Configuration;
use Monowarfs\Fraudnet\Models\TransactionUpdate;
use Monowarfs\Fraudnet\Services\Traits\CommonProperties;

class TransactionUpdateService
{
    use CommonProperties;

    private TransactionUpdate $transactionUpdate;

    public function __construct(TransactionUpdate $transactionUpdate, ?Configuration $configuration)
    {
        $this->callCommon($configuration);
        $this->transactionUpdate = $transactionUpdate;
    }

    public function call()
    {
        try{

            return $this->httpCaller
                ->setHeader('Authorization', 'Basic '.base64_encode($this->authCode))
                ->makePostRequest(
                    $this->api::API_TRANSACTION_UPDATE,
                    $this->transactionUpdate->toArray()
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
