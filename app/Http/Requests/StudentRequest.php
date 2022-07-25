<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
            'name'                => 'required|string|min:3|max:199',
            'password'            => 'required|string|min:8',
            'phone'               => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'phone2'              => 'nullable|numeric|digits:11',
            'email'               => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'age'                 => 'nullable|date',
            'address'             => 'nullable|string|max:255',
            'whatsApp'            => 'nullable|numeric',
            'city_id'             => 'nullable|exists:cities,id',
            'level_id'            => 'nullable|exists:levels,id',
            'group_id'            => 'nullable|exists:groups,id',
            'photo'               => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
            'status'              => 'required|string|in:active,stopped',
        ];
    }


    protected function onUpdate()
    {
        return [
            'name'                => 'required|string|min:3|max:199',
            'password'            => 'required|string|min:8',
            'phone'               => 'required|numeric|digits:11',Rule::unique('users')->ignore($this->id),
            'phone2'              => 'nullable|numeric|digits:11',
            'email'               => 'required|string|min:3|max:255|email',Rule::unique('users')->ignore($this->id),
            'age'                 => 'nullable|date',
            'address'             => 'nullable|string|max:255',
            'whatsApp'            => 'nullable|numeric',
            'city_id'             => 'nullable|exists:cities,id',
            'level_id'            => 'nullable|exists:levels,id',
            'group_id'            => 'nullable|exists:groups,id',
            'photo'               => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
            'status'              => 'required|string|in:active,stopped',
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
