<?php

namespace App\Http\Controllers;

use App\Models\DataCmb;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataCmbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_cmb = DataCmb::all();

        return view('admin.dataMahasiswaBaru.datamhs', compact('data_cmb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_register' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'tmp_l' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'kode_pos' => 'required',
            'st_perkawinan' => 'required',
            'warga_negara' => 'required',
            'ibu_kandung' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required|email:rfc,dns',
            'menetap' => 'required',
            'transportasi' => 'required',
            'pendidikan_akhir' => 'required',
            'sekolah_asal' => 'required',
            'jurusan_asal' => 'required',
            'tahun_lulus' => 'required',
            'pilihan_prodi' => 'required',
            'tanda_kelulusan' => 'required',
            'foto' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
        ]);
        DataCmb::create($request->all());
        // return redirect('/formPendaftaran/daftarOnline')->with('status1', 'berhasil');
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataCmb  $dataCmb
     * @return \Illuminate\Http\Response
     *
     */
    // DataCmb $dataCmb
    public function show(DataCmb $dataCmb)
    {
        return view('admin.dataMahasiswaBaru.showDataMhs', compact('dataCmb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataCmb  $dataCmb
     * @return \Illuminate\Http\Response
     */
    public function edit(DataCmb $dataCmb)
    {
        return view('admin.dataMahasiswaBaru.edit', compact('dataCmb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataCmb  $dataCmb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataCmb $dataCmb)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'st_perkawinan' => 'required',
            'alamat' => 'required',
            'warga_negara' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required|email:rfc,dns',
            'menetap' => 'required',
            'pilihan_prodi' => 'required'

        ]);
        DataCmb::where('id_register', $dataCmb->id_register)
            ->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'st_perkawinan' => $request->st_perkawinan,
                'alamat' => $request->alamat,
                'warga_negara' => $request->warga_negara,
                'nomor_hp' => $request->nomor_hp,
                'email' => $request->email,
                'menetap' => $request->menetap,
                'pilihan_prodi' => $request->pilihan_prodi


            ]);
        return redirect('/datamhs')->with('status1', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataCmb  $dataCmb
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataCmb $dataCmb)
    {
        DataCmb::destroy($dataCmb->id_register);
        return redirect('/datamhs')->with('status2', 'berhasil');
    }
}
