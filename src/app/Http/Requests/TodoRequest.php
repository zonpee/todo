<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'content' => ['required', 'string', 'max:20']
        ];
    }

    public function messages()
    {
        return [
                'content.required' => 'Todoを入力してください',
                'content.string' => 'Todoを文字列で入力してください',
                'content.max' => 'Todoを20文字以下で入力してください',
            ];
    }



}
