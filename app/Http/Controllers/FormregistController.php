<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Province, Regencie, District, village};

class FormregistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $provinsi = Province::all();
    //     return view('depan.formPendaftaran', compact('provinsi'));
    // }

    public function index()
    {
        $data['provinces'] = Province::get(["nama_provinsi", "id_provinsi"]);
        return view('depan.formPendaftaran', $data);
    }
    public function getRegencie(Request $request)
    {
        $data['regencies'] = Regencie::where("id_provinsi", $request->id_provinsi)
            ->get(["nama_kabupaten", "id_kabupaten"]);
        return response()->json($data);
    }
    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("id_kabupaten", $request->id_kabupaten)
            ->get(["nama_kecamatan", "id_kecamatan"]);
        return response()->json($data);
    }
    public function getVillage(Request $request)
    {
        $data['villages'] = Village::where("id_kecamatan", $request->id_kecamatan)
            ->get(["nama_desa", "id_desa"]);
        return response()->json($data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
