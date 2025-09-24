<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoginHistory extends Model
{
    use HasFactory;

    protected $table = 'login_histories';

    // dengan guarded, semua field bisa diisi kecuali yang dilarang
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
