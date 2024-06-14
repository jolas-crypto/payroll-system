<?php

namespace App\Http\Requests\Premiums\PagIbig;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'gross_pay_from' => 'required|numeric',
            'less_ee_share' => 'required|numeric',
            'less_er_share' => 'required|numeric',
            'more_ee_share' => 'required|numeric',
            'more_er_share' => 'required|numeric',
            'max_ee_share' => 'required|numeric',
            'max_er_share' => 'required|numeric',
        ];
    }
}
