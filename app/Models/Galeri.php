<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    //
    use HasFactory;

    protected $table = 'galeri';
    protected $primaryKey = 'id_galeri';
    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
        'tanggal_upload'
    ];
    public $timestamps = false;
}
