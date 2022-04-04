<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\TransactionCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Transaction
{
    use CommonModel;

    public ?string $order_id = null;
    public ?string $ordered_on = null;
    public ?string $type = null;
    public ?string $order_is_digital = null;
    public ?string $order_total = null;
    public ?string $order_currency = null;
    public ?string $status = null;
    public ?string $event = null;
    public ?string $user_id = null;
    public ?string $order_source = null;
    public ?string $order_count = null;
    public ?string $total_spent = null;
    public ?string $session_id = null;
    public ?string $first_purchase_date = null;
    public ?string $last_purchase_date = null;
    public ?string $user_locale = null;
    public ?string $coupon_code = null;
    public ?string $order_discount = null;
    public ?string $order_shipping = null;
    public ?string $order_subtotal = null;
    public ?string $order_tax = null;
    public ?string $shipped_on = null;
    public ?string $agent_code = null;
    public ?string $agent_dept = null;
    public ?string $ident_id = null;
    public ?string $ident_country = null;
    public ?string $ident_type = null;
    public ?string $iban = null;
    public ?string $transaction_id = null;
    public ?string $fee = null;
    public ?string $geo = null;
    public ?string $reference = null;

    public function toArray()
    {
        return [
            'order_id' => $this->order_id,
            'ordered_on' => $this->ordered_on,
            'type' => $this->type,
            'order_is_digital' => $this->order_is_digital,
            'order_total' => $this->order_total,
            'order_currency' => $this->order_currency,
            'status' => $this->status,
            'event' => $this->event,
            'user_id' => $this->user_id,
            'order_source' => $this->order_source,
            'order_count' => $this->order_count,
            'total_spent' => $this->total_spent,
            'session_id' => $this->session_id,
            'first_purchase_date' => $this->first_purchase_date,
            'last_purchase_date' => $this->last_purchase_date,
            'user_locale' => $this->user_locale,
            'coupon_code' => $this->coupon_code,
            'order_discount' => $this->order_discount,
            'order_shipping' => $this->order_shipping,
            'order_subtotal' => $this->order_subtotal,
            'order_tax' => $this->order_tax,
            'shipped_on' => $this->shipped_on,
            'agent_code' => $this->agent_code,
            'agent_dept' => $this->agent_dept,
            'ident_id' => $this->ident_id,
            'ident_country' => $this->ident_country,
            'ident_type' => $this->ident_type,
            'iban' => $this->iban,
            'transaction_id' => $this->transaction_id,
            'fee' => $this->fee,
            'geo' => $this->geo,
            'reference' => $this->reference,
        ];
    }
}
