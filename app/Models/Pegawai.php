<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nik',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'telpon',
        'agama',
        'status_nikah',
        'alamat',
        'golongan_id',
        'foto',
    ];

    public function golongan()
    {
        return $this->hasOne(Golongan::class, 'id', 'golongan_id');
    }
}
