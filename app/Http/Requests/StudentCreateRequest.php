<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'nis' => 'required|unique:students|numeric',
            'name' => 'required|string',
            'class_id'=>'required',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nama'
        ];
    }
    public function messages()
    {
        return [
            'nis.Required' => 'nis harus diisi'
        ];
    }
}
