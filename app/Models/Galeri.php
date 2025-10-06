<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    //
    use HasFactory;

    protected $table = 'galeri';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'keterangan',
        'file',
        'jenis',
        'tanggal'
    ];
    public $timestamps = false;
}
