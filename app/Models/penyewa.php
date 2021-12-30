<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'password', 'email', 'jk', 'pekerjaan', 'alamat', 'kota', 'provinsi'];
}
