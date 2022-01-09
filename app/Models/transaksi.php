<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['mobil_no', 'tgl_sewa', 'tgl_kembali', 'lama_pakai', 'total_biaya', 'penyewa_id', 'tgl_transaksi'];
    public $timestamps = true;

    public function mobils()
    {
        return $this->belongsTo('App\Models\mobil', 'id');
    }

    public function penyewas()
    {
        return $this->belongsTo('App\Models\penyewa', 'id');
    }
}
