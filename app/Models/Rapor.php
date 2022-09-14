<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rapor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [

        'id_siswa',
        'id_mentor',
        'speaking',
        'reading',
        'listening',
        'progress_belajar'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'id_mentor');
    }
}
