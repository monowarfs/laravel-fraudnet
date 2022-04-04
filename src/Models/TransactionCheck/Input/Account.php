<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\TransactionCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Account
{
    use CommonModel;

    /*
     * Required
     * string or null
     * Account number used for transaction
     */
    public ?string $account_id;
    public ?string $current_balance = null;
    public ?string $days_late = null;
    public ?string $due_on = null;
    public ?string $inc_country = null;
    public ?string $inc_on = null;
    public ?string $inc_region = null;
    public ?string $label = null;
    public ?string $last_balance = null;
    public ?string $last_login = null;
    public ?string $last_min_due = null;
    public ?string $last_payment_amt = null;
    public ?string $last_payment_on = null;
    public ?string $last_statement_on = null;
    public ?string $min_due = null;
    public ?string $opened_on = null;
    public ?string $tax_id = null;
    public ?string $type = null;
    public ?string $unbilled_charges = null;
    public ?string $exposure_amt = null;
    public ?string $avail_funds = null;
    public ?string $closed_on = null;
    public ?string $credit_limit = null;
    public ?string $is_active = null;
    public ?string $is_fraud = null;
    public ?string $late_status_label = null;
    public ?string $status = null;
    public ?string $pin_change_on = null;
    public ?string $email_change_on = null;
    public ?string $address_change_on = null;
    public ?string $password_change_on = null;
    public ?string $phone_change_on = null;

    public function toArray()
    {
        return [
            'account_id' => $this->account_id,
            'current_balance' => $this->current_balance,
            'days_late' => $this->days_late,
            'due_on' => $this->due_on,
            'inc_country' => $this->inc_country,
            'inc_on' => $this->inc_on,
            'inc_region' => $this->inc_region,
            'label' => $this->label,
            'last_balance' => $this->last_balance,
            'last_login' => $this->last_login,
            'last_min_due' => $this->last_min_due,
            'last_payment_amt' => $this->last_payment_amt,
            'last_payment_on' => $this->last_payment_on,
            'last_statement_on' => $this->last_statement_on,
            'min_due' => $this->min_due,
            'opened_on' => $this->opened_on,
            'tax_id' => $this->tax_id,
            'type' => $this->type,
            'unbilled_charges' => $this->unbilled_charges,
            'exposure_amt' => $this->exposure_amt,
            'avail_funds' => $this->avail_funds,
            'closed_on' => $this->closed_on,
            'credit_limit' => $this->credit_limit,
            'is_active' => $this->is_active,
            'is_fraud' => $this->is_fraud,
            'late_status_label' => $this->late_status_label,
            'status' => $this->status,
            'pin_change_on' => $this->pin_change_on,
            'email_change_on' => $this->email_change_on,
            'address_change_on' => $this->address_change_on,
            'password_change_on' => $this->password_change_on,
            'phone_change_on' => $this->phone_change_on
        ];
    }

}
