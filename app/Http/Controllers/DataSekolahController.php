<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSekolah = DataSekolah::all();
        return view('admin.dataSekolah.dataSekolah', compact('dataSekolah'));
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
     * @param  \App\Models\DataSekolah  $dataSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(DataSekolah $dataSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSekolah  $dataSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSekolah $dataSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSekolah  $dataSekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataSekolah $dataSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSekolah  $dataSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSekolah $dataSekolah)
    {
        //
    }
}
