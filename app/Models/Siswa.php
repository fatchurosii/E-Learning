<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_users',
        'id_kategori_siswa',
        'alamat',
        'no_hp',
        'photo',
        'kelas'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kategori_siswa()
    {
        return $this->belongsTo(KategoriSiswa::class, 'id_kategori_siswa');
    }

    public function rapor()
    {
        return $this->hasMany(Rapor::class);
    }
}
