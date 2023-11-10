<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|exists:users,name',
//            'title' => 'required|string',
            'body' => 'required|string',
            'topic_id' => 'required|integer|exists:topics,id',
            'user_id' => 'required|integer|exists:users,id',

        ];
    }
}
