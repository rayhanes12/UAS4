<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenilaianRequest extends FormRequest
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
            'alternatif_id' => 'required|numeric|integer|unique:penilaians',
            'slug' => 'required',
            'C1x' => 'required|numeric|integer',
            'C2x' => 'required|numeric|integer',
            'C3x' => 'required|numeric|integer',
            'C4x' => 'required|numeric|integer',
            'C5x' => 'required|numeric|integer',
        ];
    }
}
