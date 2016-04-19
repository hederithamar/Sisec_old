<?php

namespace Sisec\Http\Requests;

use Sisec\Http\Requests\Request;

class EnterpriseCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'rfc' => 'required|unique:enterprises',
            'nameemp' => 'required',
            'type' => 'required',
            'status' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];
    }
}
