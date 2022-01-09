<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'password', 'email', 'jk', 'pekerjaan', 'alamat', 'kota', 'provinsi'];
    public $timestamps = true;

    public function sewas()
    {
        $this->hasMany('App\Models\sewa', 'penyewa_id');
    }
    public function transaksis()
    {
        $this->hasMany('App\Models\'transaksi', 'penyewa_id');
    }
}
