<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $fillable = ['no_mobil', 'nama_mobil', 'jenis_mobil', 'tahun_pembuatan', 'harga_sewa', 'kapasitas_penumpang', 'fasilitas_mobil', 'status_mobil', 'gambar'];
    public $timestamps = true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return asset('images/mobil/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return unlink(public_path('images/mobil/' . $this->gambar));
        }

    }

    public function sewas()
    {
        return $this->hasMany('App\Models\sewa', 'mobil_no');
    }
    public function transaksis()
    {
        $this->hasMany('App\Models\transaksi', 'mobil_no');
    }
    public static function boot()
    {
        parent::boot();
        self::deleting(function ($mobil) {
            if ($mobil->sewas->count() > 0) {
                Alert::error('Gagal Menghapus', 'Data ' . $mobil->no_mobil . ' Masih Memiliki Mobil');
                return false;
            }
        });
    }
}
