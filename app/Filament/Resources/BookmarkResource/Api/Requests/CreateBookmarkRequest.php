<?php

namespace App\Filament\Resources\BookmarkResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookmarkRequest extends FormRequest
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
			'bookmark_id' => 'required',
			'pengguna_id' => 'required',
			'lembaga_id' => 'required'
		];
    }
}
