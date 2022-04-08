<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Services\BankingFintech;

use Illuminate\Support\Facades\Log;
use Monowarfs\Fraudnet\Exceptions\FraudnetException;
use Monowarfs\Fraudnet\Models\Configuration;
use Monowarfs\Fraudnet\Models\TransactionCheck;
use Monowarfs\Fraudnet\Services\Traits\CommonProperties;

class TransactionCheckService
{
    use CommonProperties;

    private TransactionCheck $transactionCheck;

    private $response;

    public function __construct(TransactionCheck $transactionCheck, ?Configuration $configuration)
    {
        $this->callCommon($configuration);
        $this->transactionCheck = $transactionCheck;
    }

    public function call()
    {
        try{

            $this->response =  $this->httpCaller
                ->setHeader('Authorization', 'Basic '.base64_encode($this->authCode))
                ->makePostRequest(
                    $this->api::API_TRANSACTION_CHECK,
                    $this->transactionCheck->assignedToArray()
                );

            return $this;

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
