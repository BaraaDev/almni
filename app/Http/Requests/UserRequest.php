<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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

    protected function onCreate()
    {
        return [
            'name'                      => 'required|string|min:3|max:199',
            'password'                  => 'required|string|min:8',
            'username'                  => 'required|string|min:3|max:199',Rule::unique('users')->ignore($this->id),
            'phone'                     => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'phone2'                    => 'nullable|numeric|digits:11',
            'email'                     => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'bio'                       => 'nullable|string|max:255',
            'gender'                    => 'string|in:male,female',
            'age'                       => 'nullable|date',
            'address'                   => 'nullable|string|max:255',
            'facebook'                  => 'nullable|string',
            'twitter'                   => 'nullable|string',
            'instagram'                 => 'nullable|string',
            'whatsApp'                  => 'nullable|numeric',
            'telegram'                  => 'nullable|string',
            'city_id'                   => 'nullable|exists:cities,id',
            'photo'                     => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
            'status'                    => 'required|string|in:active,stopped',
        ];
    }


    protected function onUpdate()
    {
        return [
            'name'                      => 'required|string|min:3|max:199',
            'username'                  => 'required|string|min:3|max:199',Rule::unique('users')->ignore($this->id),
            'phone'                     => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'phone2'                    => 'nullable|numeric|digits:11',
            'email'                     => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'bio'                       => 'nullable|string|max:255',
            'gender'                    => 'string|in:male,female',
            'status'                    => 'required|string|in:active,stopped',
            'age'                       => 'nullable|date',
            'job'                       => 'nullable|string|min:4|max:60',
            'location'                  => 'nullable|string|max:255',
            'facebook'                  => 'nullable|string',
            'twitter'                   => 'nullable|string',
            'instagram'                 => 'nullable|string',
            'linkedin'                  => 'nullable|string',
            'whatsApp'                  => 'nullable|string',
            'YouTube'                   => 'nullable|string',
            'AskFM'                     => 'nullable|string',
            'city_id'                   => 'nullable|exists:cities,id',
            'photo'                     => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return request()->isMethod('put') || request()->isMethod('patch') ?
            $this->onUpdate() : $this->onCreate();
    }
}
