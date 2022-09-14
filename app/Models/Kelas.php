<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_users',
        'id_kategori_kelas',
        'title',
        'embed_video',
        'deksripsi',
        'image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function kategori_kelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'id_kategori_kelas');
    }
}
