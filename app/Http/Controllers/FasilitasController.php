<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Cache\Store;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return View('admin.fasilitas.fasilitas', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitas.fasilitasCreate');
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
            'nama_f' => 'required',
            'gambar' => 'required',
            'kategori' => 'required'
        ]);


        $b = $request->gambar;
        $filename = time() . rand(100, 999) . "." . $b->getClientOriginalExtension();
        $fasilitas = new Fasilitas;
        $fasilitas->nama_f = $request->nama_f;
        $fasilitas->kategori = $request->kategori;
        $fasilitas->gambar = $filename;



        $b->move(public_path() . '/img/fasilitas', $filename);
        $fasilitas->save();
        return redirect('/fasilitas')->with('berhasil', 'sukses');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilitas)
    {
        $file_path = public_path() . '/img/fasilitas/' . $fasilitas->gambar;
        $img = unlink($file_path);

        Fasilitas::destroy($fasilitas->id_f);
        return redirect('/fasilitas')->with('statusHapus', 'berhasil');
    }
}
