<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    // use HasFactory;protected $fillable = ['no_nota', 'mobil_no', 'driver_id', 'penyewa_id', 'tgl_sewa', 'tgl_kembali', 'pembayaran', 'jaminan', 'denda'];
    // public $timestamps = true;

    public function mobils()
    {
        return $this->belongsTo('App\Models\mobil', 'id');
    }

    public function drivers()
    {
        return $this->belongsTo('App\Models\driver', 'id');
    }

    public function penyewas()
    {
        return $this->belongsTo('App\Models\penyewa', 'id');
    }

}
