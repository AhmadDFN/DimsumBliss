<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengadaan extends Model
{
    use HasFactory;
    protected $table = 'pengadaans';
    protected $guarded = ['id'];


    public function produk()
    {
        return $this->belongsTo(Produk::class, 'pengadaan_id_produk', 'id');
    }
}
