<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download = Download::all();
        return view('admin.download.download', compact('download'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.download.downloadCreate');
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
            'nama_file' => 'required',
            'kategori' => 'required',
            'file' => 'required',
        ]);

        $a = $request->file;
        $nameFile = time() . $a->getClientOriginalName();
        $download = new Download;
        $download->nama_file = $request->nama_file;
        $download->kategori = $request->kategori;
        $download->file = $nameFile;
        $sizeFile = $a->getClientOriginalExtension();
        $download->type = $sizeFile;


        $a->move(public_path() . '/img/download', $nameFile);
        $download->save();
        return redirect('/download')->with('berhasil', 'sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        return view('admin.download.showDownload', compact('download'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        $file_path = public_path() . '/img/download/' . $download->file;
        $file = unlink($file_path);

        Download::destroy($download->id);
        return redirect('/download')->with('statusHapus', 'berhasil');
    }
}
