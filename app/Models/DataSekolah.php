<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    use HasFactory;
    protected $table = "tb_sekolah";
    protected $primaryKey = "id_sekolah";
    public $timestamps = false;
    protected $fillable = [
        'id_kabupaten', 'nama_sekolah'
    ];
}
