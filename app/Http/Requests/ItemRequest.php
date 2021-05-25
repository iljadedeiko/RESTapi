<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
             'categoryName' => 'required',
             'name' => 'required|ends_with:_item',
             'value' => 'required|numeric|min:10|max:100',
             'quality' => 'required|numeric|min:-10|max:50'
        ];
    }

    public function attributes()
    {
        return [
            'categoryName' => 'category'
        ];
    }
}
