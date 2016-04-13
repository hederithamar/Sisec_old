<?php

namespace Sisec\Http\Requests;

use Sisec\Http\Requests\Request;

class IntegrationCreateRequest extends Request
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
            'typecontract' => 'required',
            'name' => 'required',
            'description' => 'required',
            'ep' => 'required',
            'fort' => 'required',
            'weigth' => 'required'
        ];
    }
}
