<?php

namespace Sisec\Http\Requests;

use Sisec\Http\Requests\Request;

class IntegrationUpdateRequest extends Request
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
    public function integrations()
    {
       
    }
}
