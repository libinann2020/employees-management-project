<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
        return [
            'first_name' => ['required', 'min:3', 'max:100'],
            'last_name' => ['required', 'min:3', 'max:100'],
            'middle_name' => ['required', 'min:3', 'max:100'],
            'zipcode' => ['required', 'min:5', 'max:10'],
            'department_id' => ['required', 'exists:departments,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'birth_date' => ['required', 'date'],
            'date_hired' => ['required', 'date'],
        ];
    }
}
