<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string' ,
            'last_name' => 'required|string',
            'email' => 'required|email:rfc,dns',
            'message' => 'nullable',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages() : array
    {
        return [
            'first_name.required' => 'الاسم مطلوب',
            'first_name.min' => 'يجب على اللأقل ان يكون الاسم 5 حروف'
        ];
    }
}
