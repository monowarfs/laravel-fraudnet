<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class AccountApplicationUpdate
{
    use CommonModel;

    /*
     * string
     */
    public ?string $updated_on = null;

    /*
     * string or null
     * Allowed values: new,hold,queued,approved,cancelled,fulfilled,returned
     */
    public ?string $status = null;

    /*
     * string or null
     */
    public ?string $queue_status = null;

    /*
     * boolean
     */
    public ?bool $is_fraud = null;

    /*
     * string
     */
    public ?string $fraud_type = null;

    /*
     * string
     */
    public ?string $refuse_reason = null;

    /*
     * string
     */
    public ?string $cancelled_reason = null;

    /*
     * string
     */
    public ?string $approved_amount = null;

    /*
     * string
     */
    public ?string $payment_status = null;

    /*
     * integer
     */
    public ?int $terms_months_count = null;

    /*
     * integer
     */
    public ?int $last_payment_on = null;

    /*
     * integer
     */
    public ?int $count_missed_payments = null;

    /*
     * string <date-time>
     */
    public ?string $agent_updated_on = null;

    /*
     * string
     * application_id
     */
    public ?string $order_id = null;

    public function toArray(): array
    {
        return [
            "updated_on" => $this->updated_on,
            "status" => $this->status,
            "queue_status" => $this->queue_status,
            "is_fraud" => $this->is_fraud,
            "fraud_type" => $this->fraud_type,
            "refuse_reason" => $this->refuse_reason,
            "cancelled_reason" => $this->cancelled_reason,
            "approved_amount" => $this->approved_amount,
            "payment_status" => $this->payment_status,
            "terms_months_count" => $this->terms_months_count,
            "last_payment_on" => $this->last_payment_on,
            "count_missed_payments" => $this->count_missed_payments,
            "agent_updated_on" => $this->agent_updated_on,
            "order_id" => $this->order_id
        ];
    }

}
