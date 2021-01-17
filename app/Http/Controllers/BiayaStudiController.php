<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\BiayaStudi;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiayaStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biayastudi = BiayaStudi::all();
        return view('admin.biayaStudi.biayastudi', compact('biayastudi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.biayaStudi.tambahBiayastudi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = $request->image;
        $nameFile = time() . rand(100, 999) . "." . $a->getClientOriginalExtension();
        $biayastudi = new BiayaStudi;
        $biayastudi->name = $request->name;
        $biayastudi->image = $nameFile;


        $a->move(public_path() . '/img/biayastudi', $nameFile);
        $biayastudi->save();
        return redirect('/biayaStudi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BiayaStudi  $biayaStudi
     * @return \Illuminate\Http\Response
     */
    public function show(BiayaStudi $biayaStudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BiayaStudi  $biayaStudi
     * @return \Illuminate\Http\Response
     */
    public function edit(BiayaStudi $biayaStudi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BiayaStudi  $biayaStudi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BiayaStudi $biayaStudi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BiayaStudi  $biayaStudi
     * @return \Illuminate\Http\Response
     */
    public function destroy(BiayaStudi $biayaStudi)
    {

        $file_path = public_path() . '/img/biayastudi/' . $biayaStudi->image;
        $img = unlink($file_path);

        BiayaStudi::destroy($biayaStudi->id);
        return redirect('/biayaStudi')->with('statusHapus', 'berhasil');
    }
}
