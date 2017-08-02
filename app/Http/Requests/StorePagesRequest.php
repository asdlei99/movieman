<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePagesRequest extends Request
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
            'title' => 'max:255|required',
            'slug' => 'max:255|required',
            'content' => 'required',
        ];
    }
}