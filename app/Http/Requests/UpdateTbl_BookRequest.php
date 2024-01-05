<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTbl_BookRequest extends FormRequest
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

            'book_uniq_id' => 'required',
            "book_name" => "required",
            "cover_photo" => "required|file|mimes:jpeg,jpg,png|max:2048",
            'content_owner_name' => "required",
            'publisher_name' => "required"

        ];
    }
}
