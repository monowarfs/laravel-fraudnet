<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;
use Monowarfs\Fraudnet\Models\TransactionCheck\input\Account;
use Monowarfs\Fraudnet\Models\TransactionCheck\input\Payment;
use Monowarfs\Fraudnet\Models\TransactionCheck\input\Seller;

class TransactionUpdate
{
    use CommonModel;

    public ?string $order_id = null;
    public ?string $agent_code = null;
    public ?string $agent_updated_on = null;
    public ?string $agent_dept = null;
    public ?string $event = null;
    public ?string $is_fraud = null;
    public ?string $is_locked = null;
    public ?string $order_total = null;
    public ?string $updated_on = null;
    public ?string $status = null;
    public ?string $fraud_type = null;
    public ?string $note = null;

    public ?Payment $payment = null;
    public ?Account $account = null;
    public ?Seller $seller = null;


    public function __construct(?Array $properties=array()){
        if($properties !== null && count($properties) )
        {
            foreach($properties as $key => $value){
                $this->{$key} = $value;
            }
        }
    }


    public function assignedToArray()
    {
        $res = [];

        foreach($this as $key => $value)
        {
            if($this->{$key} !== null){
                if(is_object($this->{$key}))
                {
                    $res[$key] = $value->assignedToArray();
                    continue;
                }
                $res[$key] = $value->toArray();

            }
        }

        return $res;
    }


    public function toArray(): array
    {
        return [
            "order_id" => $this->order_id,
            "agent_code"=> $this->agent_code,
            "agent_updated_on"=> $this->agent_updated_on,
            "agent_dept"=> $this->agent_dept,
            "event"=> $this->event,
            "is_fraud"=> $this->is_fraud,
            "is_locked"=> $this->is_locked,
            "order_total"=> $this->order_total,
            "updated_on"=> $this->updated_on,
            "status"=> $this->status,
            "fraud_type"=> $this->fraud_type,
            "note"=> $this->note,

            "payment"=> $this->payment->toArray(),
            "account"=> $this->account->toArray(),
            "seller"=> $this->seller->toArray(),
        ];
    }
}
