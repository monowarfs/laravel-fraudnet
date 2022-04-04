<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\TransactionCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Payment
{
    use CommonModel;

    public ?string $card_status = null;
    public ?string $is_active = null;
    public ?string $payment_status = null;
    public ?string $chargeback_status = null;
    public ?string $payment_id = null;
    public ?string $threeDS_eci = null;
    public ?string $threeDS_vid = null;
    public ?string $threeDS_xid = null;
    public ?string $actual_amt = null;
    public ?string $actual_ccy = null;
    public ?string $arn = null;
    public ?string $auth_attempts = null;
    public ?string $auth_flag = null;
    public ?string $auth_res_code = null;
    public ?string $auth_res_source = null;
    public ?string $avs_result_code = null;
    public ?string $billed_amt = null;
    public ?string $billed_ccy = null;
    public ?string $bin = null;
    public ?string $card_account_id = null;
    public ?string $card_present = null;
    public ?string $card_product_type = null;
    public ?string $ch_auth = null;
    public ?string $ch_present = null;
    public ?string $cvv_result_code = null;
    public ?string $eci = null;
    public ?string $emv_aid = null;
    public ?string $emv_chip_id = null;
    public ?string $epos_rec = null;
    public ?string $exp_date = null;
    public ?string $gateway_message = null;
    public ?string $gift_card_numbers = null;
    public ?string $gift_cards = null;
    public ?string $input_capabilities = null;
    public ?string $issue_number = null;
    public ?string $last_4 = null;
    public ?string $merchant_account = null;
    public ?string $method = null;
    public ?string $pin_status = null;
    public ?string $service_code = null;
    public ?string $terminal_id = null;
    public ?string $terminal_method = null;
    public ?string $terminal_option = null;
    public ?string $terminal_type = null;
    public ?string $token_id = null;
    public ?string $transaction_label = null;
    public ?string $transaction_type = null;
    public ?string $type = null;
    public ?string $auth_code = null;
    public ?string $active_on = null;
    public ?string $direction = null;

    public function toArray()
    {
        return [
            'card_status' => $this->card_status,
            'is_active' => $this->is_active,
            'payment_status' => $this->payment_status,
            'chargeback_status' => $this->chargeback_status,
            'payment_id' => $this->payment_id,

            '3DS_eci' => $this->threeDS_eci,
            '3DS_vid' => $this->threeDS_vid,
            '3DS_xid' => $this->threeDS_xid,
            'actual_amt' => $this->actual_amt,
            'actual_ccy' => $this->actual_ccy,

            'arn' => $this->arn,
            'auth_attempts' => $this->auth_attempts,
            'auth_flag' => $this->auth_flag,
            'auth_res_code' => $this->auth_res_code,
            'auth_res_source' => $this->auth_res_source,

            'avs_result_code' => $this->avs_result_code,
            'billed_amt' => $this->billed_amt,
            'billed_ccy' => $this->billed_ccy,
            'bin' => $this->bin,
            'card_account_id' => $this->card_account_id,

            'card_present' => $this->card_present,
            'card_product_type' => $this->card_product_type,
            'ch_auth' => $this->ch_auth,
            'ch_present' => $this->ch_present,
            'cvv_result_code' => $this->cvv_result_code,

            'eci' => $this->eci,
            'emv_aid' => $this->emv_aid,
            'emv_chip_id' => $this->emv_chip_id,
            'epos_rec' => $this->epos_rec,
            'exp_date' => $this->exp_date,

            'gateway_message' => $this->gateway_message,
            'gift_card_numbers' => $this->gift_card_numbers,
            'gift_cards' => $this->gift_cards,
            'input_capabilities' => $this->input_capabilities,
            'issue_number' => $this->issue_number,

            'last_4' => $this->last_4,
            'merchant_account' => $this->merchant_account,
            'method' => $this->method,
            'pin_status' => $this->pin_status,
            'service_code' => $this->service_code,

            'terminal_id' => $this->terminal_id,
            'terminal_method' => $this->terminal_method,
            'terminal_option' => $this->terminal_option,
            'terminal_type' => $this->terminal_type,
            'token_id' => $this->token_id,

            'transaction_label' => $this->transaction_label,
            'transaction_type' => $this->transaction_type,
            'type' => $this->type,
            'auth_code' => $this->auth_code,
            'active_on' => $this->active_on,

            'direction' => $this->direction,

        ];
    }
}
