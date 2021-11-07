<?php

namespace Src\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChargeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'value' => '',
            'type' => 'in:recurrent,single',
        ];
    }
}
