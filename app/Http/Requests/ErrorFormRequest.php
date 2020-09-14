<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ErrorFormRequest extends FormRequest
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
            'nama' =>'required|string',
            'nisn' => 'integer',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]; 
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama harus di isi',
            'nama.string' => 'Nama tidak boleh mengandung angka',
            'nisn.required'  => 'Nisn harus di isi',
            'nisn.size'  => 'Nisn harus di isi 10 digit',
            'nisn.integer'  => 'Nisn harus di isi  angka',
            'email.required'  => 'Email harus di isi',
            'email.email'  => 'Email tidak valid',
            'jurusan.required'  => 'Jurusan harus di isi',

        ];
    }
}
