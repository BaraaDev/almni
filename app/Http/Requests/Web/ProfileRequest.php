<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
            'name'              => 'required|string|max:199|min:3',
            'email'             => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'phone'             => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'bio'               => 'nullable|string|max:255',
            'address'           => 'nullable|string|max:255',
            'age'               => 'nullable|date',
            'facebook'          => 'nullable|string',
            'twitter'           => 'nullable|string',
            'instagram'         => 'nullable|string',
            'linkedin'          => 'nullable|string',
            'whatsApp'          => 'nullable|numeric',
            'telegram'          => 'nullable|string',
            'city_id'           => 'nullable|exists:cities,id',
            'photo'             => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
        ];
    }
}
