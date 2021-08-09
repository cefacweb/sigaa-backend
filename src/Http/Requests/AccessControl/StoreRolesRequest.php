<?php

namespace Http\Requests\AccessControl;

use Illuminate\Foundation\Http\FormRequest;

class StoreRolesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:roles',
            'description' => ''
        ];
    }
}
