<?php

namespace Sisec\Http\Requests;

use Sisec\Http\Requests\Request;

class EnterpriceCreateRequest extends Request
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
            'rfc' => 'required|unique:enterprices',
            'nameemp' => 'required',
            'type' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'status' => 'required',
        ];
    }
}
