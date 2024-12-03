<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        // dd(request()->all());
        return [
            // 'title.*' => 'required|string|min:3|max:18',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'required',
            'details' => 'required',
            'category' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'image.required' => 'Please select the project image',
            'title.*.required' => 'Please type title project',
            'title.*.max' => 'Please Max 18 letters ',
            'title.*.min' => 'Please Min 4 letters ',
            'url.required' => 'Please type URL project',
            'details.required' => 'Please type details project',
            'category.required' => 'Please select the project category',
        ];
    }
}