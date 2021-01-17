<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCmb extends Model
{
    // use HasFactory;
    // protected $table = "data_cmb";
    // public $timestamps = false;
    protected $primaryKey = "id_register";
    protected $fillable = [
        'nik', 'jenis_register', 'nama', 'tmp_l',
        'tgl_lahir', 'jk', 'agama', 'alamat', 'provinsi', 'kabupaten', 'kecamatan',
        'desa', 'kode_pos', 'st_perkawinan', 'warga_negara', 'ibu_kandung', 'nomor_hp',
        'email', 'menetap', 'transportasi', 'pendidikan_akhir', 'sekolah_asal', 'jurusan_asal', 'tahun_lulus',
        'pilihan_prodi', 'tanda_kelulusan', 'ktp', 'foto', 'kk', 'pengantar', 'nama_dosen', 'nidn', 'nama_staf', 'nik_staf', 'nama_mhs', 'nim', 'sumber_info'
    ];
}
