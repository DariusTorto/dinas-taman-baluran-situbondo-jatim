<?php

namespace App\Http\Controllers;

use App\AkomodasiLuar;
use Illuminate\Http\Request;

class AkomodasiLuarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akomodasi.luar');
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
            'nama' => 'required' ,
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);

		AkomodasiDalam::create([
			'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

		return redirect('akomodasi-luar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AkomodasiLuar  $akomodasiLuar
     * @return \Illuminate\Http\Response
     */
    public function edit(AkomodasiLuar $akomodasiluar,$id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AkomodasiLuar  $akomodasiLuar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AkomodasiLuar $akomodasiluar,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AkomodasiLuar  $akomodasiLuar
     * @return \Illuminate\Http\Response
     */
    public function destroy(AkomodasiLuar $akomodasiLuar,$id)
    {
        AkomodasiLuar::where('id_luar', $id)->first()->delete();
        return redirect('admin');
    }
}
