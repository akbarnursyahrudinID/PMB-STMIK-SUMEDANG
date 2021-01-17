<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukm = Ukm::all();
        return view('admin.ukm.ukm', compact('ukm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ukm.ukmCreate');
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
            'nama_ukm' => 'required',
            'tentang' => 'required',
            'logo' => 'required',

        ]);
        $b = $request->logo;
        $filename = time() . rand(100, 999) . "." . $b->getClientOriginalExtension();
        $ukm = new Ukm;
        $ukm->nama_ukm = $request->nama_ukm;
        $ukm->tentang = $request->tentang;
        $ukm->logo = $filename;
        $ukm->video = $request->video;



        $b->move(public_path() . '/img/ukm', $filename);
        $ukm->save();
        return redirect('/ukm')->with('berhasil', 'sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function show(Ukm $ukm)
    {
        return view('admin.ukm.ukmDetail', compact('ukm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function edit(Ukm $ukm)
    {
        return view('admin.ukm.ukmEdit', compact('ukm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ukm $ukm)
    {
        $request->validate([
            'nama_ukm' => 'required',
            'tentang' => 'required',

        ]);
        Ukm::where('id_ukm', $ukm->id_ukm)
            ->update([
                'nama_ukm' => $request->nama_ukm,
                'tentang' => $request->tentang,
                'video' => $request->video
            ]);
        return redirect('/ukm')->with('berhasilUbah', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ukm $ukm)
    {
        $file_path = public_path() . '/img/ukm/' . $ukm->logo;
        $logo = unlink($file_path);

        Ukm::destroy($ukm->id_ukm);
        return redirect('/ukm')->with('statusHapus', 'berhasil');
    }
}
