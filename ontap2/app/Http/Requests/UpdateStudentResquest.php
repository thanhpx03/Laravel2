<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Student;

class UpdateStudentResquest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $table=(new Student())->getTable();
        return [
            //
            'name'=>"required",
            'phone'=>"required|unique:$table",
            'gender'=>"required",
            'address'=>"required",
            'image'=>"required",

        ];
    }
}
