<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataCmbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_cmbs', function (Blueprint $table) {
            $table->id('id_register');
            $table->string('nik', 20)->unique();
            $table->string('jenis_register', 10);
            $table->string('nama', 30);
            $table->string('tmp_l', 30);
            $table->string('tgl_lahir', 20);
            $table->string('jk', 10);
            $table->string('agama', 10);
            $table->text('alamat');
            $table->string('provinsi', 20);
            $table->string('kabupaten', 20);
            $table->string('kecamatan', 20);
            $table->string('desa', 20);
            $table->bigInteger('kode_pos');
            $table->string('st_perkawinan', 10);
            $table->string('warga_negara', 10);
            $table->string('ibu_kandung', 30);
            $table->string('nomor_hp', 15);
            $table->string('email', 30);
            $table->string('menetap', 50);
            $table->string('transportasi', 20);
            $table->string('pendidikan_akhir', 10);
            $table->string('sekolah_asal', 50);
            $table->string('jurusan_asal', 30);
            $table->string('tahun_lulus', 15);
            $table->string('pilihan_prodi', 30);
            $table->text('tanda_kelulusan');
            $table->text('ktp');
            $table->text('foto');
            $table->text('kk');
            $table->string('pengantar', 30);
            $table->string('nama_dosen', 30);
            $table->string('nidn', 30);
            $table->string('nama_staf', 30);
            $table->string('nik_staf', 20);
            $table->string('nama_mhs', 30);
            $table->string('nim', 29);
            $table->string('sumber_info', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_cmbs');
    }
}
