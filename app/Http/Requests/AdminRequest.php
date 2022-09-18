<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'username' => 'required|unique',
            'phone' => 'required|unique',
            'password' => 'required',
            'checkbox' => 'required',
        ];
        if (request()->route('admin_id')) {
            unset($rules['password']);
        }
        return $rules;
    }


}
