<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;




    protected $date = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
