<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateArtikelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'judul' => 'required|min:5|max:255',
            'slug' => 'unique:artikels,slug,' . $this->artikel->id,
            'isi' => 'required|min:20',
            'status' => 'required|in:draft,terbit',
        ];
    }
}
