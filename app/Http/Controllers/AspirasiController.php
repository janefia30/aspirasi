<?php

namespace App\Http\Controllers;

use App\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasi = DB::table('suarasiswas')->get();
        return view('pages.index',['aspirasi' =>$aspirasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create/laporkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        // return $request;
        {
            $request->validate([
                'namalengkap' => 'required',
                'kelas' => 'required',
                'nomorhp' => 'required',
                'jeniskelamin' => 'required',
                'katagori' => 'required',
                'keluh' => 'required',
            ]);
            $aspirasi = new Aspirasi;
            $aspirasi->namalengkap = $request->namalengkap;
            $aspirasi->kelas = $request->kelas;
            $aspirasi->jeniskelamin = $request->jeniskelamin;
            $aspirasi->nomorhp = $request->nomorhp;
            $aspirasi->katagori = $request->kategori;
            $aspirasi->keluh = $request->keluh;

            $aspirasi->save();

            return redirect('/success')->with('status','Data Sudah di tambahkan');
        }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirasi $aspirasi)
    {
       $aspirasi = DB::table('suarasiswas')->get();
       return view('success', compact('aspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirasi $aspirasi)
    {
        //
    }
}
