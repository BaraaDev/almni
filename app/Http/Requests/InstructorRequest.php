<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InstructorRequest extends FormRequest
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
            'nickname'                  => 'required|string|min:3|max:199',
            'phone'                     => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'phone2'                    => 'nullable|numeric|digits:11',
            'password'                  => 'required|string|min:8',
            'email'                     => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'status'                    => 'required|string|in:active,stopped',
            'age'                       => 'nullable|date',
            'location'                  => 'nullable|string|max:255',
            'facebook'                  => 'nullable|string',
            'twitter'                   => 'nullable|string',
            'linkedin'                  => 'nullable|string',
            'whatsApp'                  => 'nullable|string',
            'city_id'                   => 'nullable|exists:cities,id',
            'subject_id'                => 'nullable|exists:subjects,id',
            'photo'                     => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
        ];
    }


    protected function onUpdate()
    {
        return [
            'name'                      => 'required|string|min:3|max:199',
            'nickname'                  => 'required|string|min:3|max:199',
            'phone'                     => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'phone2'                    => 'nullable|numeric|digits:11',
            'password'                  => 'nullable|string|min:8',
            'email'                     => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'status'                    => 'required|string|in:active,stopped',
            'age'                       => 'nullable|date',
            'location'                  => 'nullable|string|max:255',
            'facebook'                  => 'nullable|string',
            'twitter'                   => 'nullable|string',
            'linkedin'                  => 'nullable|string',
            'whatsApp'                  => 'nullable|string',
            'city_id'                   => 'nullable|exists:cities,id',
            'subject_id'                => 'nullable|exists:subjects,id',
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
