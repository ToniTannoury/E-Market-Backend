<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
        $method = $this->method();
        if($method == "PUT"){
            return [
                'name' => ['required'],
                'title' => ['required'],
                'description' => ['required'],
                'amount' => ['required'],
                'image' => ['required'],
            ];
        }else{
            return [
                'name' => ['sometimes', 'required'],
                'title' => ['sometimes','required'],
                'description' => ['sometimes','required'],
                'amount' => ['sometimes','required'],
                'image' => ['sometimes','required']
            ];
        }
    }
}
