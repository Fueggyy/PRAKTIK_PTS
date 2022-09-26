<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePegawaiRequest extends FormRequest
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
            'nip' => ['string', 'max:255'],
            'nik' => ['string', 'max:255'],
            'nama' => ['string', 'max:255'],
            'jenis_kelamin' => ['string', 'max:255'],
            'tempat_lahir' => ['string', 'max:255'],
            'tanggal_lahir' => ['string', 'max:255'],
            'telpon' => ['string', 'max:255'],
            'agama' => ['string', 'max:255'],
            'status_nikah' => ['string', 'max:255'],
            'alamat' => ['string', 'max:255'],
            'golongan_id' => ['string', 'max:255'],
            'foto' => ['string', 'max:255'],
        ];
    }
}
