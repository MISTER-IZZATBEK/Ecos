<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'family'=>'required|string|max:255',
            'phone'=>'required|regex:/(01)[0-9]{9}/',
        ];
    }

    public function messages()
    {
     return [
         'name.required'=>'name is required',
         'family.required'=>'family is required',
         'phone.numeric'=>'phone is required',
     ];
    }
}
