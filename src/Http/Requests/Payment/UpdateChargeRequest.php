<?php

namespace Http\Requests\Payment;

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
            'user_id' => 'required|exists:users,id',
            'value' => 'required',
            // 'type' => 'required',
        ];
    }
}
