<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => ['required', 'string', 'max:255'],
            // 'email'     => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'phone'     => 'required|string|max:255|unique:users,phone,' . auth()->id(),
            'address'   => 'nullable',
            'city'      => 'nullable',
            'state'     => 'nullable',
            'country'   => 'nullable|exists:countries,code',
            'zip_code'  => 'nullable|numeric|digits_between:2,5',
        ];
    }
}
