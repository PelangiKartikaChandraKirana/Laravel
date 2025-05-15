<?php

namespace App\Filament\Resources\LembagaResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLembagaRequest extends FormRequest
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
			'lembaga_id' => 'required',
			'nama_lembaga' => 'required',
			'gambar' => 'required|string',
			'deskripsi' => 'required',
			'range_harga' => 'required',
			'durasi_kursus' => 'required',
			'nama_program' => 'required',
			'lokasi' => 'required',
			'kontak' => 'required',
			'maps' => 'required'
		];
    }
}
