<?php

namespace Sisec\Http\Requests;

use Sisec\Http\Requests\Request;

class DocCreateRequest extends Request
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
            'typeprocess' => 'required',
            'name' => 'required',
            'description' => 'required',
            'format' => 'required',
            'weight' => 'required',
        ];
    }
}

