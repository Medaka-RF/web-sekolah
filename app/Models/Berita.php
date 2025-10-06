<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    //
    use HasFactory;

    // Nama tabel di database
    protected $table = 'berita';

    // Primary key dari tabel
    protected $primaryKey = 'id_berita';

    // Kolom yang boleh diisi
    protected $fillable = [
        'judul',
        'isi',
        'tanggal',
        'foto'
    ];

    // Kalau tabel tidak pakai created_at dan updated_at
    public $timestamps = false;
}
