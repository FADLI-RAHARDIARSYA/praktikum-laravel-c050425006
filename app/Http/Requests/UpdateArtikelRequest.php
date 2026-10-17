<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArtikelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'judul'  => 'required|string|min:5|max:255',
            'isi'    => 'required|string|min:20',
            'status' => 'required|in:draft,terbit',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required'  => 'Judul artikel wajib diisi.',
            'judul.min'       => 'Judul artikel minimal terdiri dari 5 karakter.',
            'isi.required'    => 'Isi artikel wajib diisi.',
            'isi.min'         => 'Isi artikel minimal harus 20 karakter.',
            'status.required' => 'Status artikel wajib dipilih.',
            'status.in'       => 'Status artikel hanya boleh draft atau terbit.',
        ];
    }
}