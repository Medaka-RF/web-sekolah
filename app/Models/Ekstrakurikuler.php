<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekstrakurikuler extends Model
{
    //
    use HasFactory;

    protected $table = 'ekstrakurikuler';
    protected $primaryKey = 'id_ekstrakurikuler';
    protected $fillable = [
        'nama_ekstrakurikuler',
        'pembina',
        'jadwal',
        'deskripsi',
        'foto'
    ];
    public $timestamps = false;
}
