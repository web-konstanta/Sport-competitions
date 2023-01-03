<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'checkout' => 'required',
            'parent_name' => 'required|string',
            'user_name' => 'required|string',
            'birth_date' => 'required',
            'phone_number' => 'required',
            'owner_name' => 'required|string',
            'battle' => '',
            'freestyle' => '',
            'base' => '',
            'weight' => ''
        ];
    }
}
