<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class JurusanValidate extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama_jurusan' => 'required|string',
            'prodi' => 'required'

        ]; 
    }

    public function messages()
    {
        return [
            'nama_jurusan.required' => 'Nama Jurusan Harus di isi',
            'prodi.required' => 'Pilih Prodi', 

        ];
    }
}
