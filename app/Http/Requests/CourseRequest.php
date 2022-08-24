<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title'              => 'required|string|min:3|max:199',
            'description'        => 'required|string|max:600',
            'short_description'  => 'nullable|string|max:100',
            'course_date'        => 'required|date',
            'price'              => 'required|numeric',
            'discount'           => 'required|numeric',
            'subject_id'         => 'nullable|exists:subjects,id',
            'level_id'           => 'nullable|exists:levels,id',
            'category_id'        => 'nullable|exists:categories,id',
            'instructor_id'      => 'nullable|exists:users,id',
            'status'             => 'string|in:active,stopped',
        ];
    }
}
