<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuncheRequest extends FormRequest
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
            'deposit'        => 'required|numeric',
            'price'          => 'required|numeric',
            'user_id'        => 'nullable|exists:users,id',
            'course_id'      => 'nullable|exists:courses,id',
            'group_id'       => 'nullable|exists:groups,id',
            'date'           => 'required|date',
        ];
    }
}
