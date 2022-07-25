<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureRequest extends FormRequest
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
            'name'               => 'required|string|min:3|max:199',
            'description'        => 'required|string|max:600',
            'group_id'           => 'nullable|exists:groups,id',
            'course_id'          => 'nullable|exists:courses,id',
            'instructor_id'      => 'nullable|exists:users,id',
            'image'              => 'nullable|image:jpg, jpeg, png, bmp, gif, svg,webp',
            'status'             => 'string|in:active,stopped',
        ];
    }
}
