<?php

namespace Http\Requests\AccessControl;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersPermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'role_name' => 'required|exists:roles,name'
        ];
    }
}
