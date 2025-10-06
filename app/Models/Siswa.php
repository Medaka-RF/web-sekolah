<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nisn',
        'nama_siswa',
        'jenis_kelamin',
        'tahun_masuk',
    ];
 
    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_siswa', 'id_siswa');
    }
    //
}
