<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;
use Monowarfs\Fraudnet\Models\TransactionCheck\Input\Account;
use Monowarfs\Fraudnet\Models\TransactionCheck\Input\Customer;
use Monowarfs\Fraudnet\Models\TransactionCheck\Input\Device;
use Monowarfs\Fraudnet\Models\TransactionCheck\Input\Payment;
use Monowarfs\Fraudnet\Models\TransactionCheck\Input\Seller;
use Monowarfs\Fraudnet\Models\TransactionCheck\Input\Transaction;

class TransactionCheck
{
    public ?Account $account = null;
    public ?Customer $customer = null;
    public ?Payment $payment = null;
    public ?Seller $seller = null;
    public ?Transaction $transaction = null;
    public ?Device $device = null;


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
                }
                $this->{$key} = $value;
            }
        }

        return $res;
    }

    public function toArray(): array
    {
        return [
            "transaction" => $this->transaction->toArray(),
            "device" => $this->device->toArray(),
            "payment" => $this->payment->toArray(),
//            "transaction" => $this->transaction->toArray(),
//            "transaction" => $this->transaction->toArray(),



//            "transaction": {
//        "order_id": "dolore",
//    "ordered_on": "4746-06-12T17:28:22.679Z",
//    "type": "update",
//    "order_is_digital": true,
//    "order_total": -79145720,
//    "order_currency": "a",
//    "status": "approved",
//    "event": "ea eiusmod culpa cupidatat dolore",
//    "user_id": "fugiat laborum eiusmod conseq",
//    "order_source": "Duis voluptate",
//    "order_count": 37991172,
//    "total_spent": -35749657,
//    "session_id": "Excepteur mollit ut",
//    "first_purchase_date": "4088-07-13T10:10:03.113Z",
//    "last_purchase_date": "3759-01-27T20:00:51.337Z"
//  },
//  "device": {
//        "ip_address": null,
//    "user_agent": "non sunt velit occa"
//  },
//  "billing": {
//        "address1": "veniam dolor anim aliqua sint",
//    "address2": "consectetur sin",
//    "company": null,
//    "city": "veniam dolore",
//    "region": "ut eu tempor sint",
//    "postal_code": "pariatur Lorem consectetur sit",
//    "country": "officia ",
//    "email": "Herminia43@gmail.com",
//    "phone": "tempor anim dolore",
//    "last_name": null
//  },
//  "shipping": {
//        "address1": "reprehenderit non Excepteur irure fugiat",
//    "address2": null,
//    "company": null,
//    "city": "eiusmod ut aliqua velit",
//    "region": "amet anim Excepteur",
//    "postal_code": "nulla",
//    "country": null,
//    "email": "Ephraim96@hotmail.com",
//    "phone": null,
//    "last_name": null
//  },
//  "payment": {
//        "method": "rewards_points",
//    "type": "mc",
//    "bin": null,
//    "last_4": "cil",
//    "exp_date": null,
//    "avs_result_code": null,
//    "cvv_result_code": "occaecat anim esse",
//    "payment_status": "void"
//  }
        ];
    }
}
