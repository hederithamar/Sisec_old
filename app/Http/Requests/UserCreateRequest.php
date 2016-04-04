<?php

namespace Sisec\Http\Requests;

use Sisec\Http\Requests\Request;

class UserCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'firstlastname' => 'required',
            'secondlastname' => 'required',
            'celphone' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'state' => 'required',
            'zone' => 'required',
            'rol' => 'required',
            'enterprice_id' => 'required',
            'id_curp' => 'required',
        ];
    }
}
