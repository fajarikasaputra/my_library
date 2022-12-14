<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class);
    }

    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
}
