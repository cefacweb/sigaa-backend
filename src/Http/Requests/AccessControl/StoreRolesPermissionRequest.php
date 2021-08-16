<?php

namespace Http\Requests\AccessControl;

use Illuminate\Foundation\Http\FormRequest;

class StoreRolesPermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'permission_name' => 'required|exists:permissions,name'
        ];
    }
}
