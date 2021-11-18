<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonevRequest extends FormRequest
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
            'path' => 'file|max:10000'
        ];
    }

    public function messages()
    {
        return [
            'path.max' => 'File yang diupload harus berukuran maksimal 10MB.'
        ];
    }
}
