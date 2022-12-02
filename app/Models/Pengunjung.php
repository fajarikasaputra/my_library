<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $guarded = ['$id'];
    // protected $fillable = [
    //     'nama',
    //     'email',
    //     'alamat',
    //     'jaminan',
    // ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class);
    }
}
