<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
            'name'              => 'required|string|min:3|max:199',
            'description'       => 'nullable|string|max:500',
            'level_id'          => 'nullable|exists:levels,id',
            'classroom_id'      => 'required|exists:classrooms,id',
            'start_date'        => 'required',
            'months'            => 'required',
            'days'              => 'required',
            'status'            => 'required|string|in:active,stopped',
        ];
    }
}
