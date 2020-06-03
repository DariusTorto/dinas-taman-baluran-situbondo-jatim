<?php

namespace App\Http\Controllers;

use App\Konten;
use App\AkomodasiDalam;
use App\AkomodasiLuar;
use App\Kategori;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konten = Konten::all();
        $akomodasidlm = AkomodasiDalam::all();
        $akomodasiluar = AkomodasiLuar::all();
        return view('dashboard.main', compact('konten','akomodasidlm','akomodasiluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('konten.index', compact('kategori'));
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
            'judul' => 'required' ,
            'kategori' => 'required' ,
            'isi' => 'required' ,
            'thumbnail' => 'required'
        ]);

		Konten::create([
			'judul' => $request->judul,
			'kategori' => $request->kategori,
			'isi' => $request->isi,
            'thumbnail' => $request->thumbnail
        ]);

		return redirect('dashboard.main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function show(Konten $konten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function edit(Konten $konten)
    {
        return view('konten.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konten $konten)
    {
        Konten::where('id_konten', $id)->first()->delete();
        return redirect('dashboard.main');
    }
}
