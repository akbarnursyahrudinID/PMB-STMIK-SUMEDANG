<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beasiswa = Beasiswa::all();
        return view('admin.beasiswa.beasiswa', compact('beasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.beasiswa.tambahBeasiswa');
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
            'nama_beasiswa' => 'required',
            'deskripsi' => 'required|min:5',
        ]);
        beasiswa::create($request->all());
        return redirect('/beasiswa')->with('status1', 'berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Beasiswa $beasiswa)
    {
        return view('admin.beasiswa.editBeasiswa', compact('beasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beasiswa $beasiswa)
    {
        Beasiswa::where('id_beasiswa', $beasiswa->id_beasiswa)
            ->update([
                'nama_beasiswa' => $request->nama_beasiswa,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link
            ]);
        return redirect('/beasiswa')->with('status2', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beasiswa $beasiswa)
    {
        Beasiswa::destroy($beasiswa->id_beasiswa);
        return redirect('/beasiswa')->with('status3', 'berhasil');
    }
}
